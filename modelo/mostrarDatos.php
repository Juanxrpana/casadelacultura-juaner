<?php

    
    if (!is_file("../modelo/Crud.php")){

        echo "Falta definir la clase crud";
        exit;
    }

    require_once ("../modelo/Crud.php");
    $obj= new Crud();
    $datos=$obj->mostrarDatos();

    $tabla='<table class="table table-striped table-hover">
                     <thead>
                             <tr>
                                <th scope="col">Cédula</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col"></th>
                               
                            </tr>
                     </thead>
                     <tbody>';
    $datosTabla="";
    foreach ($datos as $key => $value){
        $a = $value['idDirectorSalon'];
        $datosTabla=$datosTabla.'    
                            <tr style="cursor:pointer">
                                <td>'.$value['idDirectorSalon'].'</td>
                                <td>'.$value['Nombre1'].'</td>
                                <td>'.$value['Apellido1'].'</td>
                                <td>'.$value['Correo'].'</td>
                                <td>'.$value['Telefono'].'</td>
                                <td>

                                <a class="btn btn-success btn-sm"  data-toggle="modal" data-target="#insertarModal" onclick=" modificarDatos('.$value['idDirectorSalon'].')"><i class="fa-solid fa-user-pen"></i></a>
                                <a class="btn btn-danger btn-sm" onclick="eliminarDatos('.$value['idDirectorSalon'].')"><i class="fa-solid fa-user-xmark"></i></a>
                                </td>
                                
                               
                                
                            </tr>';

    }
    echo $tabla.$datosTabla.'</tbody></table>';
?>

