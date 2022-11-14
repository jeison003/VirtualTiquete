<?php

require_once("/../../acceso_datos/accesoentidades/accessusuario.php");

function autenticarUsuario($Codigo,$Contraseña){
    $BDD     = new accessusuario();
    $usuario = $BDD->autenticarUsuario($Codigo, $Contraseña);
    return $usuario;
}

function listarUsuarios(){
    $BDD      = new accessusuario();
    $usuarios = $BDD->listarUsuarios();
    return $usuarios;
}

function BuscarUsuarioPorCodigo($Codigo){
    $BDD     = new accessusuario();
    $usuario = $BDD->BuscarUsuarioPorCodigo($Codigo);
}