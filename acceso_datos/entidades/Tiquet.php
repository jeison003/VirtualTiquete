<?php


class Tiquet{

    public $Id_tiquet;
    public $Id_usuario;
    public $Turno;
    public $Estado;
    public $Fecha;

    public function __construct($Id_tiquet, $Id_usuario, $Turno,$Estado,$Fecha){
        $this->Id_tiquet    = $Id_tiquet;
        $this->Id_usuario   = $Id_usuario;
        $this->Turno        = $Turno;
        $this->Estado       = $Estado;
        $this->Fecha        = $Fecha;
    }

    //Metodos get

    public function getIdtiquet(){
        return $this->Id_tiquet;
    }

    public function getIdusuario(){
        return $this->Id_usuario;
    }
    
    public function getTurno(){
        return $this->Turno;
    }

    public function getEstado(){
        return $this->Estado;
    }

    public function getFecha(){
        return $this->Fecha;
    }

    //Metodos sett

    public function setIdtiquet($Id_tiquet){
        $this->Id_tiquet = $Id_tiquet;
        return $this;
    }

    public function setIdusuario($Id_usuario){
        $this->Id_usuario = $Id_usuario;
        return $this;
    }

    public function setTurno($Turno){
        $this->Turno = $Turno;
        return $this;
    }

    public function setEstado($Estado){
        $this->Estado = $Estado;
        return $this;
    }

    public function setFecha($Fecha){
        $this->Fecha = $Fecha;
        return $this;
    }




}