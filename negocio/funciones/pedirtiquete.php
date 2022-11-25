<?php

session_start();

require_once(__DIR__."/../funcionesentidades/funcionTiquet.php");
require_once(__DIR__."/../funcionesentidades/funcionUsuario.php");
require_once(__DIR__."/../../acceso_datos/entidades/Tiquet.php");

$Codigo     = $_POST['Codigo'];
$fechahoy   = date("Y-m-d");
$usuario    = BuscarUsuarioPorCodigo($Codigo);
$id         = $usuario->getId_usuario();
$estado     = 'espera';
$tiqueteshoy= verTiquetesPorFecha($fechahoy);
$turno = NULL;

if(isset($tiqueteshoy)){
    foreach($tiqueteshoy as $i => $value){
        $turno = $tiqueteshoy[$i]->getTurno() + 1;
    }
}else{
    $turno = 1;
}

$Tiquet = new Tiquet(NULL,$id,$turno,$estado,$fechahoy);
crearTiquet($Tiquet);

header("location: ../../presentacion/vistausuario.php");
