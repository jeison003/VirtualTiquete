<?php

session_start();

//require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/negocio/funcionesentidades/funcionUsuario.php');
//require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/negocio/funcionesentidades/funcionReclamarAlmuerzo.php');
//require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/negocio/funcionesentidades/funcionTiquet.php');

require_once(__DIR__."/../funcionesentidades/funcionUsuario.php");
require_once(__DIR__."/../funcionesentidades/funcionReclamarAlmuerzo.php");
require_once(__DIR__."/../funcionesentidades/funcionTiquet.php");
require_once(__DIR__."/../../acceso_datos/entidades/Tiquet.php");
require_once(__DIR__."/../../acceso_datos/entidades/Usuario.php");

//pedidos por método post en un formulario

$Codigo      = $_POST['Codigo'];
$Contrasenia = $_POST['Contrasenia'];
$usuario = autenticarUsuario($Codigo,$Contrasenia);


if(!isset($usuario)){    
    $intentos = 1;
    $_SESSION['INTENTO'] = $intentos;    
    header("location: ../../presentacion/login.php");    
}

$fechaActual = date('Y-m-d');
$tiquetesF  = verTiquetesPorFecha($fechaActual);

$_SESSION['DIAHOY']   = $fechaActual;
$_SESSION['PRIMERTURNO']= end($tiquetesF)->getTurno();
$id = end($tiquetesF)->getIdusuario();
$usuarioprimero = BuscarUsuarioPorId($id);
$_SESSION['PRIMERCODIGO'] = $usuarioprimero->getCodigo();

if($usuario->getRol()=='user'){

$Almuerzo = buscarDiasUsuario($Codigo);
$dia1   = $Almuerzo[0]->getDia_beneficiado();
//$dia2   = $Almuerzo[1]->getDia_beneficiado();

$tiquetesI  = verTiquetesPorId($usuario->getId_usuario());


if(!isset($tiquetesF) and !isset($tiquetesF) ){
    $turnohoy = NULL;
}else{    
    foreach($tiquetesF as $i => $value){
        foreach($tiquetesI as $j => $value){
            if($tiquetesI[$j]==$tiquetesF[$i]){
                $turnohoy = $tiquetesF[$i]->getTurno();
            }
        }
    }
}
}
$_SESSION['TURNO']    = $turnohoy;
$_SESSION['CODIGO']   = $usuario->getCodigo();
$_SESSION['NOMBRE']   = $usuario->getNombre();
$_SESSION['DIA1']     = $dia1;
//$_SESSION['DIA2']     = $dia2;



if($usuario->getRol()=='admin'){
    header("location: ../../presentacion/admin.php");
}else{
    header("location: ../../presentacion/vistausuario.php");
}


?>