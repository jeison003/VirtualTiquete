<?php

session_start();

require_once(__DIR__."/../../acceso_datos/entidades/Usuario.php");
require_once(__DIR__."/../funcionesentidades/funcionUsuario.php");
require_once(__DIR__."/../funcionesentidades/funcionTiquet.php");

$Codigo             = intval($_POST['Codigo']);
$usuario            = BuscarUsuarioPorCodigo($Codigo);
$id                 = intval($usuario->getId_usuario());
$tiquetesUsuario    = verTiquetesPorId($id);
$fechahoy           = date("Y-m-d");
$tiqueteshoy        = verTiquetesPorFecha($fechahoy);

foreach($tiqueteshoy as $i => $value){
    foreach($tiquetesUsuario as $j => $value){
        if($tiquetesUsuario[$j]==$tiqueteshoy[$i]){
            $tiquete = $tiqueteshoy[$i];
            $idtiquete = $tiqueteshoy[$i]->getIdtiquet();
        }
    }
}
if(isset($tiquete)){
    saltarTiquet($tiquete,$Idtiquet);
}    
header("location: ../../presentacion/admin.php");

?>