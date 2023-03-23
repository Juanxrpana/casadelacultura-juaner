
<?php

    
    if (!is_file("../modelo/gestionusuarios.php")){

        echo "Falta definir la clase gestionUsuario";
        exit;
    }

    require_once ("../modelo/gestionusuarios.php");
    $obj= new registro_Usuario();
    $datos=$obj->mostrarDatosUsuario();

    $tablaUsuario='<table class="table table-striped table-hover">
                     <thead>
                             <tr>
                                <th scope="col">Id Usuario</th>
                                <th scope="col">Privilegio</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Modificar/Eliminar</th>
                            </tr>
                     </thead>
                     <tbody>';
    $datosTablaUsuario="";
    foreach ($datos as $key => $value){
        $a = $value['IdUsuario'];
        $datosTablaUsuario=$datosTablaUsuario.'  
                            <tr style="cursor:pointer">
                                <td>'.$value['IdUsuario'].'</td>
                                <td>'.$value['privilegio'].'</td>
                                <td>'.$value['Usuario'].'</td>                                   
                                <td>

                                <a id="modify" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalUsuario" data-id="'.$value['IdUsuario'].'"onclick="modificarUsuario('.$value['IdUsuario'].')"><i class="fa-solid fa-user-pen"></i></a>
                                <a class="btn btn-danger btn-sm" data-id="'.$value['IdUsuario'].'" onclick="eliminarDatos('.$value['IdUsuario'].')"><i class="fa-solid fa-user-xmark"></i></a>

                                </td>
                                
                               
                                
                            </tr>';

    }
    echo $tablaUsuario.$datosTablaUsuario.'</tbody></table>';
?>

