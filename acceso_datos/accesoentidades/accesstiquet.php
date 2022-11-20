<?php

require_once("conexion.php");
require(__DIR__."/../entidades/Tiquet.php");

class accestiquet{


    public function verTiquetesPorId($Id_usuario){
        $BDD = new conexion();
        $tablaResultados = $BDD->ejecutarConsulta("SELECT * FROM tiquet WHERE Id_usuario = ? ", array($Id_usuario));
        if(count($tablaResultados)!=0){
            foreach($tablaResultados as $i => $valor){
                $tiquet     = NULL;
                $tiquetes   = array();
                $tiquet = new Tiquet(
                    $tablaResultados[$i]["Id_tiquete"],
                    $tablaResultados[$i]["Id_usuario"],
                    $tablaResultados[$i]["Turno"],
                    $tablaResultados[$i]["Estado"],
                    $tablaResultados[$i]["Fecha"]
                );
                array_push($tiquetes, $tiquet);
            }
            return $tiquetes;
        }
        return null;
    }

    public function verTiquetesPorFecha($Fecha){
        $BDD = new conexion();
        $tablaResultados = $BDD->ejecutarConsulta("SELECT * FROM tiquet WHERE fecha = ?",array($Fecha));
        if(count($tablaResultados)!=0){
            foreach($tablaResultados as $i => $valor){
                $tiquet     = NULL;
                $tiquetes   = array();
                $tiquet = new Tiquet(
                    $tablaResultados[$i]["Id_tiquete"],
                    $tablaResultados[$i]["Id_usuario"],
                    $tablaResultados[$i]["Turno"],
                    $tablaResultados[$i]["Estado"],
                    $tablaResultados[$i]["Fecha"]
                );
                array_push($tiquetes, $tiquet);
            }
            return $tiquetes;
        }
        return null;
    }

    public function verTiquetesPorEstado($Estado){
        $BDD = new conexion();
        $tablaResultados = $BDD->ejecutarConsulta("SELECT * FROM tiquete WHERE Estado = ? ",array($Estado));
        if(count($tablaResultados)!=0){
            foreach($tablaResultados as $i => $valor){
                $tiquet     = NULL;
                $tiquetes   = array();
                $tiquet = new Tiquet(
                    $tablaResultados[$i]["Id_tiquete"],
                    $tablaResultados[$i]["Id_usuario"],
                    $tablaResultados[$i]["Turno"],
                    $tablaResultados[$i]["Estado"],
                    $tablaResultados[$i]["Fecha"]
                );
                array_push($tiquetes, $tiquet);
            }
            return $tiquetes;
        }
        return null;
    }




}

