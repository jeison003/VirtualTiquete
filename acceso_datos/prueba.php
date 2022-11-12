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
 }else{
    ?>
    <h1>conecato</h1>
    <?php
    $consulta = "SELECT * FROM usuario";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
            $id = $row['Id_usuario'];
            $codigo = $row['Codigo'];
            $contra = $row['Contrasenia'];
            $rol = $row['Rol'];
            ?>
            <div>
                <h2> <?php echo $codigo; ?> </h2>
                <div>
                    <p>
                        <b>ID: </b><?php echo $id; ?><br>
                        <b>Rol: </b><?php echo $rol?><br>
                        <b>Contraseña: </b><?php echo $contra?><br>
                    </p>
                </div>
            </div>
            <?php
        }
    }
 }
 ?>