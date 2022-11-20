<?php

class Usuario{
    
    public $id_usuario;
    public $Codigo;
    public $Contrasenia;
    public $Rol;
    public $Nombre;
    public $Apellido;

    public function __construct($id_usuario,$Codigo,$Contrasenia,$Rol,$Nombre,$Apellido){

        $this->id_usuario   = $id_usuario;
        $this->Codigo       = $Codigo;
        $this->Contrasenia   = $Contrasenia;
        $this->Rol          = $Rol;
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
    }

    //métodos GET

    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function getCodigo(){
        return $this->Codigo;
    }

    public function getContrasenia(){
        return $this->Contrasenia;
    }

    public function getRol(){
        return $this->Rol;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getApellido(){
        return $this->Apellido;
    }
    //métodos SET

    public function setId_usuario($id_usuario){
        $this->id_usuario=$id_usuario;
        return $this;
    }

    public function setCodigo($Codigo){
        $this->Codigo=$Codigo;
        return $this;
    }

    public function setContrasenia($Contrasenia){
        $this->Contrasenia=$Contrasenia;
        return $this;
    }

    public function setRol($Rol){
        $this->Rol=$Rol;
        return $this;
    }

    public function setNombre($Nombre){
        $this->Nombre=$Nombre;
        return $this;
    }

    public function setApellido($Apellido){
        $this->Apellido=$Apellido;
        return $this;
    }
}