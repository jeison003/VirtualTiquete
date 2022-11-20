<?php

require_once("conexion.php");
//require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/acceso_datos/accesoentidades/conexion.php');
require_once(__DIR__."/../entidades/Usuario.php");

class accessusuario{
     //verifica que el usuario esté registrado
     public function autenticarUsuario($Codigo, $Contrasenia){
        $BDD     = new conexion();
        $usuario = NULL;
        $tablaResultados= $BDD->ejecutarConsulta("SELECT * FROM usuario WHERE Codigo =? AND Contrasenia =?", array($Codigo,$Contrasenia));
        if(count($tablaResultados)==1){//sí encontró el usuario
            foreach($tablaResultados as $i => $valor){
                $usuario = new Usuario(
                    $tablaResultados[$i]["Id_usuario"],
                    $tablaResultados[$i]["Codigo"],
                    $tablaResultados[$i]["Contrasenia"],
                    $tablaResultados[$i]["Rol"],
                    $tablaResultados[$i]["Nombre"],
                    $tablaResultados[$i]["Apellido"]
                );
            }    
        }
        //sí no se encuentra en la base de datos retornará el NULL
        return $usuario;
    }

    //lista los usuarios existentes
    public function listarUsuarios(){
        $BDD = new conexion();
        $tablaResultados = $BDD->ejecutarConsulta("SELECT * FROM usuario", NULL);
        if(count($tablaResultados)!=0){//si hay usuarios que listar
            $usuario  = NULL;
            $usuarios = array();//lista de usuarios

            foreach($tablaResultados as $i=> $valor){
                $usuario = new Usuario( // se crea un usuario por cada fila de la tabla
                    $tablaResultados[$i]["Id_usuario"],
                    $tablaResultados[$i]["Codigo"],
                    $tablaResultados[$i]["Contrasenia"],
                    $tablaResultados[$i]["Rol"],
                    $tablaResultados[$i]["Nombre"],
                    $tablaResultados[$i]["Apellido"]
                );
                array_push($usuarios,$usuario);
            }
            return $usuarios;
        }
        return NULL;
    }

    public function BuscarUsuarioPorCodigo($Codigo){
        $BDD     = new conexion();
        $usuario = NULL;
        $tablaResultados = $BDD->ejecutarConsulta("SELECT * FROM usuario WHERE Codigo= ?",array($Codigo));
        if(count($tablaResultados)==1){
            $usario = new Usuario(
                $tablaResultados[0]["Id_isuario"],
                $tablaResultados[0]["Codigo"],
                $tablaResultados[0]["Contrasenia"],
                $tablaResultados[0]["Rol"],
                $tablaResultados[0]["Nombre"],
                $tablaResultados[0]["Apellido"]
            );
        }
        
        return $usuario;
    }

}