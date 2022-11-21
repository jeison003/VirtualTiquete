<?php

session_start();
//require_once("/../functionesentidades/funcionUsuario.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/negocio/funcionesentidades/funcionUsuario.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/negocio/funcionesentidades/funcionReclamarAlmuerzo.php');

//pedidos por método post en un formulario

$Codigo     = $_POST['Codigo'];
$Contrasenia = $_POST['Contrasenia'];

$usuario = autenticarUsuario($Codigo,$Contrasenia);

$dias = array("domingo","lunes","martes","miércoles","jueves","viernes","sábado");
$fechaActual = $dias[date("w")];
$fechaActual = ucfirst($fechaActual);


$Almuerzo = buscarDiasUsuario($Codigo);
$dia1 = $Almuerzo[0]->getDia_beneficiado();
$dia2 = $Almuerzo[1]->getDia_beneficiado();

if($usuario!=NULL){
    $_SESSION['CODIGO'] = $usuario->getCodigo();
    $_SESSION['NOMBRE'] = $usuario->getNombre();
    $_SESSION['DIAHOY'] = $fechaActual;
    $_SESSION['DIA1'] = $dia1;
    $_SESSION['DIA2'] = $dia2;

    if($usuario->getRol()=='admin'){
        header("location: ../../presentacion/admin.php");
    }else{
        header("location: ../../presentacion/vistausuario.php");
    }
}else{
    ?>
    <script>
       console.log("error al iniciar sesión")
    </script>
<?php
    //header("location: ../../presentacion/login.php");
    

}
?>