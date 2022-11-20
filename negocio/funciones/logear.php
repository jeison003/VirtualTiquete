<?php

session_start();
//require_once("/../functionesentidades/funcionUsuario.php");
require_once ($_SERVER['DOCUMENT_ROOT'] . '/VirtualTiquete/negocio/funcionesentidades/funcionUsuario.php');

//pedidos por método post en un formulario

$Codigo     = $_POST['Codigo'];
$Contrasenia = $_POST['Contrasenia'];

$usuario = autenticarUsuario($Codigo,$Contrasenia);

if($usuario!=NULL){
    $_SESSION['CODIGO'] = $usuario->getCodigo();
    $_SESSION['NOMBRE'] = $usuario->getNombre();
    $_SESSION['APELLIDO'] = $usuario->getApellido();

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