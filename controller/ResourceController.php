<?php


class ResourceController {

	private static $instance;
	public static function getInstance() {

        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }


		public function home(){
        $view = new Home();
        $view->show();
    }

    public function login(){
    	$view = new Login();
    	$view -> show();
    }

		public function logout(){
        try{
            $model= UserRepository::getInstance()->logout_user();
            ResourceController::getInstance()->home();
        }
        catch (PDOException $e){
            $error="Se ha producido un error en la consulta: " . $e->getMessage() . "<br/>";
            $view = new Error_display();
            $view->show($error);
        }
    }

    public function loguearUsuario(){
        try{
            $repositorioUsuarios = UserRepository :: getInstance() -> loguearUsuario();
            if(isset($_SESSION ['rol'])){
                $view = new Home();
                $view -> show();

            }
        }
        catch(PDOException $e){
            $error="Se ha producido un error en la consulta: " . $e->getMessage() . "<br/>";
            $view = new Error_display();
            $view->show($error);
        }
    }


   /* public function chequear_agregar_usuario(){
        try{
            $model = UserRepository::getInstance()->agregar_usuario();
			$view = new Home();
			$view-> show();
            }
        catch(PDOException $e){
            $error="Se ha producido un error en la consulta: " . $e->getMessage() . "<br/>";
            $view = new Error_display();
            $view->show($error);
        }
    }

    public function agregar_usuario(){
		$view = new agregar_usuario();
		$view -> show();
	}*/


    public function vista_modificar_datos(){
        $view = new Modificar_datos();
        $view -> show();
    }

    public function modificar_datos_perfil(){
        try{
            $model = UserRepository :: getInstance()-> modificar_datos();
            $view = new Perfil();
            $view -> show();
    }
}

?>
