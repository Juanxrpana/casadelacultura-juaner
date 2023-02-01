<?php
 //verifica que exista la vista de
 //la pagina
 if(is_file("vista/".$pagina.".php")){
 //si existe se la trae, ahora ve a la carpeta vista
 //y busca el archivo principal.php 
 require_once("vista/".$pagina.".php"); 
 }
 else{
 echo "pagina encargado salon en construccion";
 }
 
?>
