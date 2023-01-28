<?php

     require_once ('modelo/Conexion.php');
    
    class Crud extends Conexion{
        public function mostrarDatos(){

        $co = $this->conecta();
        $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql=$co->query("SELECT idDirectorSalon,
                          Nombre1,
                          Nombre2,
                          Apellido1,
                          Apellido2,
                          Telefono,
                from directorsalon");

            return $sql;
            //$query->close();//
          

        }
    }

?>