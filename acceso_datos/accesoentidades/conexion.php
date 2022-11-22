<?php

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

   public function ejecutarActualizacion($sql="", $valores=array()){
        if($sql != ""){
            $consulta=$this->conexion->prepare($sql);
            $consulta->execute($valores);
            $numero_filas_afectadas = $consulta->rowCount();
            return $this->conexion->lastInsertId();
            $this->conexion=null;
        }else{
            return 0;
        }
    }
}
 
