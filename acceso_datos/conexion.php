<?php
//creo las variables del servidor, usario y contraseña
 $server = "localhost";
 $user = "root";
 $pass = "";
 $db = "virtualtiquete";

 //Establecemos la conexion con la bd
 $conexion = new mysqli($server, $user, $pass, $db);
 if($conexion->connect_errno){
    die("Conexion fallida".$conexion->connect_errno);
 } ?>
 <script>
    console.log("Conectado")
 </script>
 <?php


 ?>