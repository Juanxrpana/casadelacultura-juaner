<?php

    require_once ('Conexion.php');
    
    class Crud extends Conexion{
        public function mostrarDatos(){
            $sql="SELECT idDirectorSalon,
                          Nombre1,
                          Nombre2,
                          Apellido1,
                          Apellido2,
                          Telefono,
                from directorsalon";
            $query=Conexion::conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
            //$query->close();//
          

        }
    }

?>