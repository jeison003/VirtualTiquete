<?php

require_once(__DIR__."/../../acceso_datos/accesoentidades/accessusuario.php");
//require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/acceso_datos/accesoentidades/accessusuario.php');
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
    return $usuario;
}