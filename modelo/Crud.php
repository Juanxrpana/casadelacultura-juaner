<?php

     require_once ('../modelo/Conexion.php');
    
    class Crud extends Conexion{
        
       
        public function mostrarDatos(){

        $co = $this->conecta();
        $co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql=$co->query("SELECT *from directorsalon");

            return $sql;
            //$query->close();//
          

        }

        public function insertarDatos($datos){

            
            $co = $this->conecta();
            $co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
            $sql="INSERT into directorsalon (idDirectorSalon, Correo, Nombre1, Nombre2, Apellido1, Apellido2)
                              values (:idDirectorSalon,:Correo,:Nombre1,:Nombre2,:Apellido1,:Apellido2)";
            $query=Conexion::conecta()->prepare($sql);
            $query->bindParam(":idDirectorSalon", $datos["idDirectorSalon"], PDO::PARAM_STR);
            $query->bindParam(":Correo", $datos["Correo"], PDO::PARAM_STR);
            $query->bindParam(":Nombre1", $datos["Nombre1"], PDO::PARAM_STR);
            $query->bindParam(":Nombre2", $datos["Nombre2"], PDO::PARAM_STR);
            $query->bindParam(":Apellido1", $datos["Apellido1"], PDO::PARAM_STR);
            $query->bindParam(":Apellido2", $datos["Apellido2"], PDO::PARAM_STR);
            return $query->execute(); 
            return "1";
        }
        
    }

?>