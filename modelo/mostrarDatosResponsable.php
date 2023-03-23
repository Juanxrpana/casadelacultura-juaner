<?php

    
    if (!is_file("../modelo/gestionresponsable.php")){

        echo "Falta definir la clase responsable";
        exit;
    }

    require_once ("../modelo/gestionresponsable.php");
    $obj= new registro_responsable();
    $datos=$obj->mostrarDatosResponsable();

    $tablaresponsable='<table class="table table-striped table-hover" id="tresponsable">
                     <thead>
                             <tr>
                                <th scope="col">Cédula</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Nueva Actividad</th>
                                <th scope="col">Modificar/Eliminar</th>
                            </tr>
                     </thead>
                     <tbody>';
    $datosTablaresponsable="";
    foreach ($datos as $key => $value){
        $a = $value['RCedula'];
        $datosTablaresponsable=$datosTablaresponsable.'  
                            <tr style="cursor:pointer">
                                <td>'.$value['RCedula'].'</td>
                                <td>'.$value['Nombre1'].' '.$value['Nombre2'].'</td>
                                <td>'.$value['Apellido1'].' '.$value['Apellido2'].'</td>
                                <td>'.$value['Telefono'].'</td>
                                <td> 
                                <a id="newactividad" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ModalActividad" data-id="'.$value['RCedula'].'"onclick="InsertDatosActividad('.$value['RCedula'].')"><i class="fa-sharp fa-solid fa-list"></i>INGRESAR NUEVA ACTIVIDAD</a>
                                </td>
                                <td>                              
                                <a id="modify" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalSalon" data-id="'.$value['RCedula'].'"onclick="modificarDatos('.$value['RCedula'].')"><i class="fa-solid fa-user-pen"></i></a>
                                <a class="btn btn-danger btn-sm" data-id="'.$value['RCedula'].'" onclick="eliminarresponsable('.$value['RCedula'].')"><i class="fa-solid fa-user-xmark"></i></a>
                                </td>
                                
                               
                                
                            </tr>';

    }
    echo $tablaresponsable.$datosTablaresponsable.'</tbody></table>';
?>

