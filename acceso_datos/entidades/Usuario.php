<?php

class Usuario{
    
    public $id_usuario;
    public $Codigo;
    public $Contraseña;
    public $Rol;


    public function __construct($id_usuario,$Codigo,$Contraseña,$Rol){

        $this->id_usuario   = $id_usuario;
        $this->Codigo       = $Codigo;
        $this->Contraseña   = $Contraseña;
        $this->Rol          = $Rol;
    }

    //métodos GET

    public function getId_usuario(){
        return $this->id_usuario;
    }

    public function getCodigo(){
        return $this->Codigo;
    }

    public function getContraseña(){
        return $this->Contraseña;
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

    public function setContraseña($Contraseña){
        $this->Contraseña=$Contraseña;
        return $this;
    }

    public function setRol($Rol){
        $this->Rol=$Rol;
        return $this;
    }

}