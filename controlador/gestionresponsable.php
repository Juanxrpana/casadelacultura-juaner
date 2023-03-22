<?php

//llamada al archivo que contiene la clase
//usuarios, en ella estara el codigo que me //permitirá
//guardar, consultar y modificar dentro de mi base //de datos


//lo primero que se debe hacer es verificar al //igual que en la vista que exista el archivo

require_once("../modelo/gestionresponsable.php");
/* require_once("modelo/".$pagina.".php"); */
  
     //bien si estamos aca es porque existe la //vista y la clase
	  //por lo que lo primero que debemos hace es //realizar una instancia de la clase
	  //instanciar es crear una variable local, //que contiene los metodos de la clase
	  //para poderlos usar
      $o = new registro_responsable(); //ahora nuestro objeto //se llama $o y es una copia en memoria de la
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
            $o->set_RCedula($_POST['RCedula']);
            echo  $o->eliminarresponsable();}       
            
            else{
              
              $o->set_RCedula($_POST['RCedula']);
              $o->set_Nombre1($_POST['Nombre1']);
              $o->set_Nombre2($_POST['Nombre2']);
              $o->set_Apellido1($_POST['Apellido1']);
              $o->set_Apellido2($_POST['Apellido2']);
              $o->set_Telefono($_POST['Telefono']);
              $o->set_idNacionalidad($_POST['idNacionalidad']);

              if($accion=='insertar'){
                echo  $o->incluirresponsable();
              }
              elseif($accion=='modificar'){
                echo  $o->modificarresponsable();
              }   
              }
                  
            
        }
        exit;
    }    require_once("vista/".$pagina.".php");


?>
