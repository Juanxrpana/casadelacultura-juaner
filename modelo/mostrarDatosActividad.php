
<?php

    
    if (!is_file("../modelo/gestionsalon.php")){

        echo "Falta definir la clase gestionsalon";
        exit;
    }

    require_once ("../modelo/gestionsalon.php");
    $obj= new registro_salon();
    $datos=$obj->mostrarDatosSalon();

    $tablasalon='<table class="table table-striped table-hover">
                     <thead>
                             <tr>
                                <th scope="col">Numero de salon</th>
                                <th scope="col">Nombre del salon</th>
                                <th scope="col">Cantidad de personas por salon</th>
                                <th scope="col">Cantidad de sillas por salon</th>
                                <th scope="col"></th>
                            </tr>
                     </thead>
                     <tbody>';
    $datosTablasalon="";
    foreach ($datos as $key => $value){
        $a = $value['idSalon'];
        $datosTablasalon=$datosTablasalon.'  
                            <tr style="cursor:pointer">
                                <td>'.$value['idSalon'].'</td>
                                <td>'.$value['NombreSalon'].'</td>
                                <td>'.$value['CantidadPersonasSalon'].'</td>
                                <td>'.$value['CantidadSillas'].'</td>
                              
                                <td>

                                <a id="modify" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalSalon" data-id="'.$value['idSalon'].'"onclick="modificarDatos('.$value['idSalon'].')"><i class="fa-solid fa-user-pen"></i></a>
                                <a class="btn btn-danger btn-sm" data-id="'.$value['idSalon'].'" onclick="eliminarDatos('.$value['idSalon'].')"><i class="fa-solid fa-user-xmark"></i></a>

                                </td>
                                
                               
                                
                            </tr>';

    }
    echo $tablasalon.$datosTablasalon.'</tbody></table>';
?>

