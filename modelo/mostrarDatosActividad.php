
<?php

    
    if (!is_file("../modelo/gestionactividad.php")){

        echo "Falta definir la clase gestionactividad";
        exit;
    }

    require_once ("../modelo/gestionactividad.php");
    $obj= new registro_actividad();
    $datos=$obj->mostraractividad();

    $tablaactividad='<table class="table table-striped table-hover" id="tactividad">
                     <thead>
                             <tr>
                                <th scope="col">Nombre de la Actividad</th>
                                <th scope="col">Fecha de la Actividad</th>
                                <th scope="col">Modificar/Eliminar</th>
                            </tr>
                     </thead>
                     <tbody>';
    $datosTablaactividad="";
    foreach ($datos as $key => $value){
        $a = $value['idActividad'];
        $datosTablaactividad=$datosTablaactividad.'  
                            <tr style="cursor:pointer">
                                
                                <td>'.$value['NombreActividad'].'</td>
                                <td>'.$value['FechaActividad'].'</td>
                                
                              
                                <td>

                                <a id="modify" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalActividad" data-id="'.$value['idActividad'].'"onclick="modificarDatosActividad('.$value['idActividad'].')"><i class="fa-solid fa-user-pen"></i></a>
                                <a class="btn btn-danger btn-sm" data-id="'.$value['idActividad'].'" onclick="eliminarActividad('.$value['idActividad'].')"><i class="fa-solid fa-user-xmark"></i></a>

                                </td>
                                
                               
                                
                            </tr>';

    }
    echo $tablaactividad.$datosTablaactividad.'</tbody></table>';
?>

