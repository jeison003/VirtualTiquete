<?php

session_start();
require_once("/../functionesentidades/funcionUsuario.php");

//pedidos por método post en un formulario

$Codigo     = $_POST['Codigo'];
$Contraseña = $_POST['Contraseña'];

$usuario = autenticarUsuario($Codigo,$Contraseña);

if($usuario!=NULL){
    
    if($usuario->getRol()=='admin'){
        header("location: ../../../presentacion/admin.html");
    }else{
        header("location: ../../../presentacion/usuario.html");
    }
}else{
    header("location: ../../../presentacion/admin.html");
?>
    <script>
       console.log("error al iniciar sesión")
    </script>
<?php
}
?>