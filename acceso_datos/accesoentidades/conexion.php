<?php
   /*
   //creo las variables del servidor, usario y contraseña
   $server = "localhost";
   $user = "root";
   $pass = "";
   $db = "virtualtiquete";
   
   
   //Establecemos la conexion con la bd
   $conexion = new mysqli($this->server, $this->user, $this->pass, $this->db);
   if($conexion->connect_errno){
      die("Conexion fallida".$conexion->connect_errno);
   } 
   <script>
      console.log("Conectado")
   </script>
   <?php
   */ 
//-------------------------------//----------------------//-----------//--------------------

   //L- conexión con PDO.
class conexion{

   private $conexion;
   private $cadenaConexion;
   
   public function __construct()
    {
        try{//conexión con la base de datos
            $this->cadenaConexion="mysql:host=localhost;dbname=virtualtiquete;charset=utf8";
            $this->conexion= new PDO($this->cadenaConexion,"root","");
        }catch(PDOException $execption){
            echo $execption->getMessage();
        }
    }

   //L- permitirá hacer las consultas en las capas de lógica
  public function ejecutarConsulta($sql="",$valores=array()){
   if($sql!= ""){//L-sí se realizó una consulta
       //L- sql puede ser cualquier consulta (SELECT * FROM Usuario Where..)
       $consulta=$this->conexion->prepare($sql);
       //L- valores son los que permiten hacer los filtros, id, password, rol
       $consulta->execute($valores);
       //L- se guardan las filas en una tabla que se retornará como resultado
       $tablaResultados= $consulta->fetchAll(PDO::FETCH_ASSOC);
       $this->conexion=NULL;
       return $tablaResultados;
   }else{
       return 0;
   }    
}
}
 
