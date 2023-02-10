<?php

    if (!is_file("../modelo/Crud.php")){

        echo "Falta definir la clase crud";
        exit;
}


    require_once ("../modelo/Crud.php");



    $datos=array(
            'idDirectorSalon' => $_POST['idDirectorSalon'],
            'Correo' => $_POST['Correo'],
            'Nombre1' => $_POST['Nombre1'],
            'Nombre2' => $_POST['Nombre2'],
            'Apellido1' => $_POST['Apellido1'],
            'Apellido2' => $_POST['Apellido2'],
            'telefono' => $_POST['telefono']
            );

            $registro=new Crud();

            $accion = $_POST['accion'];

            if ($accion == 'incluir') {
                // code...
                echo $registro->insertarDatos($datos);

            }
            elseif ($accion == 'modificar') {
                // code...
                 echo $registro->modificarDatos($datos);
            }


        




          



?>



