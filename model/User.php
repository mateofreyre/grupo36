<?php



/**
 * Description of Usuario
 *
 * @author fede
 */
class User {

    private $id;
    private $email;
    private $password;
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    private $admin;
    private $reputacion;
    private $fecha_registro;

    public function __construct($id, $email, $password, $nombre, $apellido, $fecha_nacimiento, $admin, $reputacion, $fecha_registro) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->admin = $admin;
        $this->reputacion = $reputacion;
        $this->fecha_registro = $fecha_registro;
    }

    public function getId() {
        return $this->id;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }

    public function getNumeroTarjeta() {
        return $this->numero_tarjeta;
    }

    public function getAdmin() {
        return $this->admin;
    }

    public function getReputacion() {
        return $this->reputacion;
    }

    public function getFechaRegistro() {
        return $this->fecha_registro;
    }

}
