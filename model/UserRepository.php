<?php


class UserRepository extends PDORepository{
    private static $instance;

    public static function getInstance() {

        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct() {

    }

    public function logout_user(){
        session_destroy();
        session_start();
        $_SESSION['rol']=null;
    }

    /*public function agregar_usuario() {

            $email= $_POST['email'];
            $password= $_POST['contrasena'];
            $nombre= $_POST['nombre'];
            $apellido= $_POST['apellido'];
            $fecha_nacimiento= $_POST['fecha_nacimiento'];
            self::queryAll("INSERT INTO Usuario (mail, password, nombre, apellido, fecha_nacimiento, numero_tarjeta, reputacion, fecha_registro) VALUES ('{$email}', '{$password}', '{$nombre}', '{$apellido}', '{$fecha_nacimiento}', '1582392181', '0', '2018-05-17')");
            $mensaje = "La operacion ha sido realizada con exito.";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "</script>";
        }*/

    public function loguearUsuario(){

        $username = $_POST['mail'];
        $contrasenia = $_POST['password'];

        if(!is_null($username) && !is_null($contrasenia)){
            $array = array(
              'mail' => $username,
              'password' => $contrasenia
            );

            $res = self :: getInstance() -> queryAll("SELECT * FROM Usuario WHERE mail = '{$username}' AND password = '{$contrasenia}'");
          /*  var_dump($res);
            die;*/
            $user = $res->fetch(PDO::FETCH_ASSOC);
          /*  var_dump($user['mail']);
            die;*/
            if(($user ['mail'] ==  $username) && ($user['password'] == $contrasenia)){
                $_SESSION['rol'] = $user['es_admin'];
                $_SESSION['mail'] = $user['mail'];
                $_SESSION['id'] = $user['id'];
                $res = null;
            }
            else{
                $mensajeError = "Su usuario o contraseña son incorrectos";
                echo "<script>";
                echo "alert('$mensaje');";
                echo "</script>";
              }
        }
    }


    public function modificar_datos(){
        $email= $_POST['email'];
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $fecha_nacimiento= $_POST['fecha_nacimiento'];
        $mail_correcto = chequear_mail($email);
        $fecha_correcta = chequear_fecha($fecha_nacimiento);
        if($mail_correcto & $fecha_correcta){
            self::queryAll("UPDATE Usuario SET mail='{$email}', nombre='{$nombre}', apellido='{$apellido}', fecha_nacimiento='{fecha_nacimiento}' WHERE id = '{$id}'");
        }
        else{
            if (!$mail_correcto) {
            $mensaje = "La operacion ha sido rechazada por mail duplicado.";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "</script>";
            }
            if(!fecha_correcta){
                $mensaje = "La operacion ha sido rechazada por fecha incorrecta.";
                echo "<script>";
                echo "alert('$mensaje');";
                echo "</script>";
            }

        $mensaje = "La operacion ha sido realizada con exito.";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "</script>";
    }
}

?>
