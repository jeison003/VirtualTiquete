<?php

require(__DIR__."/../../acceso_datos/accesoentidades/accesstiquet.php");

function verTiquetesPorId($Id_usuario){
    $BDD = new accestiquet();
    $tiquetes = $BDD->verTiquetesPorId($Id_usuario);
    return $tiquetes;
}

function verTiquetesPorFecha($Fecha){
    $BDD = new accestiquet();
    $tiquetes = $BDD->verTiquetesPorFecha($Fecha);
    return $tiquetes;
}

function verTiquetesPorEstado($Estado){
    $BDD = new accestiquet();
    $tiquetes = $BDD->verTiquetesPorEstado($Estado);
    return $tiquetes;
}

function crearTiquet($tiquet){
    $BDD = new accestiquet();
    $newtiquete = $BDD->crearTiquet($tiquet);
    return $newtiquete;
}

