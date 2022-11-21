<?php

//require_once("/../../acceso_datos/accesoentidades/accessusuario.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/acceso_datos/accesoentidades/accesoreclamaralmuerzo.php');

function listarDias(){
    $BDD     = new accesoreclamaralmuerzo();
    $diasReclamados = $BDD->listarDias();
    return $diasReclamados;
}


function buscarDiasUsuario($Codigo){
    $BDD     = new accesoreclamaralmuerzo();
    $diasReclamados = $BDD->buscarDiasUsuario($Codigo);
    return $diasReclamados;
}