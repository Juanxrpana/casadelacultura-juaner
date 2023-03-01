<?php 

$pagina = "principal"; 

if (!empty($_GET['pagina'])){ //si no esta vacia la variable $pagina que viene por get
 $pagina = $_GET['pagina']; //cambia el valor de $pagina por el obtenido por GET
}
//pregunta si existe el archivo
//si existe lo trae, si no escribe pagina en costrucción
if(is_file("controlador/".$pagina.".php")){ //verifica que exista dentro
$pagina;

require_once("controlador/".$pagina.".php");}

else{
 echo "PAGINA EN CONSTRUCCIÓN";
}

?>

