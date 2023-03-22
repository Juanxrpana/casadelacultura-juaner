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
      $o = new registro_salon(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
	  //clase registro_salon
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
            $o->set_idSalon($_POST['idSalon']);
            echo  $o->eliminarDatos();}       
            
            else{
              
              $o->set_idSalon($_POST['idSalon']);
              $o->set_NombreSalon($_POST['NombreSalon']);
              $o->set_CantidadPersonasSalon($_POST['CantidadPersonasSalon']);
              $o->set_CantidadSillas($_POST['CantidadSillas']);
              $o->set_Nombredirector($_POST['Nombredirector']);
              $o->set_Nombredirector2($_POST['Nombredirector2']);
              $o->set_Apellidodirector($_POST['Apellidodirector']);
              $o->set_Apellidodirector2($_POST['Apellidodirector2']);

              if($accion=='insertar'){
                echo  $o->incluirsalon();
              }
              elseif($accion=='modificar'){
                echo  $o->modificarDatos();
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
