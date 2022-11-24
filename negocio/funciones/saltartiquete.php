<?php

session_start();

require_once(__DIR__."/../../acceso_datos/entidades/Tiquet.php");
require_once(__DIR__."/../funcionesentidades/funcionUsuario.php");

$Codigo             = $_POST['Codigo'];
$usuario            = BuscarUsuarioPorCodigo($Codigo);
$id                 = $usuario->getId_usuario();
$tiquetesUsuario    = verTiquetesPorId($id);
$fechahoy           = date("Y-m-d");
$tiqueteshoy        = verTiquetesPorFecha($fechahoy);

$tiquete = reset(array_intersect($tiquetesUsuario,$tiqueteshoy));

saltarTiquet($tiquete);


?>