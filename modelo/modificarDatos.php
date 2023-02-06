<?php

    if (!is_file("../modelo/Crud.php")){

        echo "Falta definir la clase crud";
        exit;
}


    require_once ("../modelo/Crud.php");

   $id=$_POST['idDirectorSalon'];

   echo json_decode(Crud::modificarDatos($id));


?>
