<?php

     require_once ('../modelo/Conexion.php');
    
    class Crud extends Conexion{
        
       
        public function mostrarDatos(){

        $co = $this->conecta();
        $co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql=$co->query("SELECT *from directorsalon");

            return $sql;
          
          

        }

        public function insertarDatos($datos){

            
            $co = $this->conecta();
            $co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql="INSERT into directorsalon (idDirectorSalon, Correo, Nombre1, Nombre2, Apellido1, Apellido2, telefono)
                              values (:idDirectorSalon,:Correo,:Nombre1,:Nombre2,:Apellido1,:Apellido2,:telefono)";
                             
            $query=Conexion::conecta()->prepare($sql);
            $query->bindParam(":idDirectorSalon", $datos["idDirectorSalon"], PDO::PARAM_STR);
            $query->bindParam(":Correo", $datos["Correo"], PDO::PARAM_STR);
            $query->bindParam(":Nombre1", $datos["Nombre1"], PDO::PARAM_STR);
            $query->bindParam(":Nombre2", $datos["Nombre2"], PDO::PARAM_STR);
            $query->bindParam(":Apellido1", $datos["Apellido1"], PDO::PARAM_STR);
            $query->bindParam(":Apellido2", $datos["Apellido2"], PDO::PARAM_STR);
            $query->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $query->execute();
            
            try{
                return "Ingresado correctamente al sistema";
            }            
            catch(Exception $e) {
				return $e->getMessage();
			}
            
        }

        public function modificarDatos($datos){

            $co = $this->conecta();
            $co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            try{

            
            


            $query=Conexion::conecta()->prepare("Update directorsalon set 
                    idDirectorSalon = :idDirectorSalon,
                    Nombre1 = :Nombre1,
                    Nombre2 = :Nombre2,
                    Apellido1 = :Apellido1,
                    Apellido2 = :Apellido2,
                    Correo = :Correo
                    telefono = :telefono
                    where 
                    idDirectorSalon = :idDirectorSalon
                    ");

            $query->bindParam(":idDirectorSalon", $datos["idDirectorSalon"], PDO::PARAM_STR);
            $query->bindParam(":Correo", $datos["Correo"], PDO::PARAM_STR);
            $query->bindParam(":Nombre1", $datos["Nombre1"], PDO::PARAM_STR);
            $query->bindParam(":Nombre2", $datos["Nombre2"], PDO::PARAM_STR);
            $query->bindParam(":Apellido1", $datos["Apellido1"], PDO::PARAM_STR);
            $query->bindParam(":Apellido2", $datos["Apellido2"], PDO::PARAM_STR);
            $query->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $query->execute();
            
                return "Datos  modificados correctamente";
            }            
            catch(Exception $e) {
                return $e->getMessage();
            }
            /* $co = $this->conecta();
            $co->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql=$co->query("SELECT *from directorsalon where id=id");
            return $sql; */
            
              
    
            }
        
    }

?>