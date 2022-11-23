<?php

session_start();

require_once(__DIR__."/../funcionesentidades/funcionTiquet.php");
require_once(__DIR__."/../funcionesentidades/funcionUsuario.php");
require_once(__DIR__."/../../acceso_datos/entidades/Tiquet.php");

$Codigo             = $_POST['Codigo'];
$usuario            = BuscarUsuarioPorCodigo($Codigo);
$id                 = $usuario->getId_usuario();
$tiquetesUsuario    = verTiquetesPorId($id);
$fechahoy           = date("Y-m-d");
$tiqueteshoy        = verTiquetesPorFecha($fechahoy);
/*
foreach($tiqueteshoy as $i => $value){
    if($tiquetesUsuario[$i]==$tiqueteshoy[$i]){
        $idtiquete = $tiqueteshoy[$i]->getIdtiquet();
    }
}
*/
$idtiquete = reset(array_intersect($tiquetesUsuario,$tiqueteshoy))->getIdtiquet();

eliminarTiquet($idtiquete);
header("location: ../../presentacion/vistausuario.php");
