<?php

//llamada al archivo que contiene la clase
//usuarios, en ella estara el codigo que me //permitirá
//guardar, consultar y modificar dentro de mi base //de datos


//lo primero que se debe hacer es verificar al //igual que en la vista que exista el archivo
if (!is_file("modelo/".$pagina.".php")){
	//alli pregunte que si no es archivo se niega //con !
	//si no existe envio mensaje y me salgo
	echo "Falta definir la clase ".$pagina;
	exit;
}

require_once("modelo/".$pagina.".php");
  if(is_file("vista/".$pagina.".php")){
     //bien si estamos aca es porque existe la //vista y la clase
	  //por lo que lo primero que debemos hace es //realizar una instancia de la clase
	  //instanciar es crear una variable local, //que contiene los metodos de la clase
	  //para poderlos usar
      $o = new registro_actividad(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
	  //clase registro_actividad
      if(!empty($_POST)){

        //como ya sabemos si estamos aca es //porque se recibio alguna informacion
        //de la vista, por lo que lo primero que //debemos hacer ahora que tenemos una
        //clase es guardar esos valores en ella //con los metodos set
       
        if(!empty($_POST)){

          //como ya sabemos si estamos aca es //porque se recibio alguna informacion
          //de la vista, por lo que lo primero que //debemos hacer ahora que tenemos una
          //clase es guardar esos valores en ella //con los metodos set
          $accion = $_POST['accion'];
    
            if($accion=='eliminar'){
            $o->set_idActividad($_POST['idActividad']);
            echo  $o->eliminaractividad();}       
            
            else{
              $o->set_idActividad($_POST['idActividad']);
              $o->set_Estatus($_POST['Estatus']);
              $o->set_NombreActividad($_POST['NombreActividad']);
              $o->set_FechaActividad($_POST['FechaActividad']);
              $o->set_Participantes($_POST['Participantes']);
              $o->set_CantidadEncuentros($_POST['CantidadEncuentros']);
              $o->set_HoraInicio($_POST['HoraInicio']);
              $o->set_Salon_idSalon($_POST['Salon_idSalon']);
              $o->set_responsable_RCedula($_POST['responsable_RCedula']);
              $o->set_HoraCierre($_POST['HoraCierre']);
              if($accion=='insertar'){
                echo  $o->incluiractividad();
              }
              elseif($accion=='modificar'){
                echo  $o->modificaractividad();
              }   
              }
        }
        exit;
    }    require_once("vista/".$pagina.".php");
}
else{
    echo "pagina en construccion";
}
?>
