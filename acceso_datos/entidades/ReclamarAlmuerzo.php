<?php

class ReclamarAlmuerzo{
    public $Id_reclamar;
    public $Dia_beneficiado;

    public function __construct($Id_reclamar,$Dia_beneficiado){
        $this->Id_reclamar = $Id_reclamar;
        $this->Dia_beneficiado = $Dia_beneficiado;
    }

    //Metodo GET
    public function getId_reclamar(){
        return $this->Id_reclamar;
    }
    public function getDia_beneficiado(){
        return $this->Dia_beneficiado;
    }

    //Metodo SET
    public function setId_reclamar($Id_reclamar){
        $this->Id_reclamar = $Id_reclamar;
        return $this;
    }

    public function setDia_beneficiado($Dia_beneficiado){
        $this->Dia_beneficiado = $Dia_beneficiado;
        return $this;
    }

}
?>