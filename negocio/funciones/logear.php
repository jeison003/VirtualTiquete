<?php

session_start();
require_once("/../functionesentidades/funcionUsuario.php");

//pedidos por método post en un formulario

$Codigo     = $_POST['Codigo'];
$Contrasenia = $_POST['Contrasenia'];

$usuario = autenticarUsuario($Codigo,$Contrasenia);

if($usuario!=NULL){
    $_SESSION['CODIGO'] = $usuario->getCodigo();
    
    if($usuario->getRol()=='admin'){
        header("location: ../../presentacion/admin.php");
    }else{
        header("location: ../../presentacion/vistausuario.php");
    }
}else{
    header("location: ../../presentacion/login.php");
?>
    <script>
       console.log("error al iniciar sesión")
    </script>
<?php
}
?>