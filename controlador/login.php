<?php
  //verifica que exista la vista de
  //la pagina

    if (!is_file("modelo/".$pagina.".php")){
      //alli pregunte que si no es archivo se niega //con !
      //si no existe envio mensaje y me salgo
      echo "Falta definir la clase ".$pagina;
      exit;
    }
    require_once("modelo/".$pagina.".php");


    if(is_file("vista/".$pagina.".php")){ 
    if(!empty($_POST)){
   
      $o = new login();
      
      $o->set_IdUsuario($_POST['IdUsuario']);
      //$o->set_Usuario($_POST['Usuario']);
      $o->set_clave($_POST['clave']);
      //$o->set_fechacreado($_POST['fechacreado']);
     
      $arrayUser = $o->busca();
      $mensaje = $arrayUser[0][0];
      
      if (!isset($arrayuser)) {
        // code...
       $IdUsuario = $arrayUser[0][1];
      }
    
    
      if($mensaje == "Administrador" or $mensaje=="Usuario"){
      session_start();
      $_SESSION['nivel'] = $arrayUser;

      header("Location: .?pagina=principal");
      }
      else{
        $mensaje = "Usuario o clave invalida";
      }
      
    }
    
    require_once("vista/".$pagina.".php"); 
  }
  else{
	  echo "pagina en construccion";
  }
?>