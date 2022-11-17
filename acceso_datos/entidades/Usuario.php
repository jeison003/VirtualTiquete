<?php

class Usuario{
    
    public $id_usuario;
    public $Codigo;
    public $Contrasenia;
    public $Rol;


    public function __construct($id_usuario,$Codigo,$Contrasenia,$Rol){

        $this->id_usuario   = $id_usuario;
        $this->Codigo       = $Codigo;
        $this->Contrasenia   = $Contrasenia;
        $this->Rol          = $Rol;
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

}