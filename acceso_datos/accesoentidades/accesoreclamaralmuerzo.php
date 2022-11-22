<?php
require_once("conexion.php");
//require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/acceso_datos/accesoentidades/conexion.php');
require_once(__DIR__."/../entidades/ReclamarAlmuerzo.php");
require_once(__DIR__."/../entidades/Usuario.php");

class accesoreclamaralmuerzo{

    public function listarDias(){
        $BDD = new conexion();
        $tablaResultados = $BDD->ejecutarConsulta("SELECT * FROM reclamar_almuerzo_dia", NULL);
        if(count($tablaResultados)!=0){
            $diaReclamar  = NULL;
            $diasReclamar = array();

            foreach($tablaResultados as $i=> $valor){
                $diaReclamar= new ReclamarAlmuerzo( // se crea un usuario por cada fila de la tabla
                    $tablaResultados[$i]["Id_reclamar"],
                    $tablaResultados[$i]["Dia_beneficiado"]
                );
                array_push($diasReclamar,$diaReclamar);
            }
            return $diasReclamar;
        }
        return NULL;
    }

    public function buscarDiasUsuario($Codigo){
        $BDD     = new conexion();
        $usuario = NULL;
        $tablaResultados= $BDD->ejecutarConsulta("SELECT reclamar_almuerzo_dia.Id_reclamar,
        reclamar_almuerzo_dia.Dia_beneficiado
         FROM ((usuario 
         INNER JOIN reclamar_usuario ON usuario.Id_usuario = reclamar_usuario.Id_usuario)
         INNER JOIN reclamar_almuerzo_dia ON reclamar_usuario.Id_reclamar = reclamar_almuerzo_dia.Id_reclamar)
         WHERE usuario.Codigo =?" , array($Codigo));
        if(count($tablaResultados)>=1){
            $dia = NULL;
            $dias = array();//sí encontró el usuario
            foreach($tablaResultados as $i => $valor){
                $dia = new ReclamarAlmuerzo(
                    $tablaResultados[$i]["Id_reclamar"],
                    $tablaResultados[$i]["Dia_beneficiado"]
                );
                array_push($dias,$dia);
            } 
            return $dias;   
        }else{
            return NULL;
        }
        //sí no se encuentra en la base de datos retornará el NULL
        
    }
}
?>