<?php
//ARCHIVO index.php 
//Se conoce como "From controller"
//es el encargado de direccionar todo el flujo de las
//paginas en nuetro sitio web


//$pagina, Variable que se recibe por GET y que indica que
//pagina sera cargada, se le asigna un valor por defecto
//en este caso principal para cuando se carga por primera vez
 
$pagina = "principal"; 


//condicional que lee la solicitud
//de cambio de pagina  
if (!empty($_GET['pagina'])){ //si no esta vacia la variable $pagina que viene por get 
  $pagina = $_GET['pagina'];  //cambia el valor de $pagina por el obtenido por GET
 }
 
 //pregunta si existe el archivo
 //si existe lo trae, si no escribe pagina en costrucción
 if(is_file("controlador/".$pagina.".php")){ //verifica que exista dentro
 //de la carpeta controlador un archivo php que se llame como el valor de $pagina
    //si lo encuentra lo trae, el no va, el se trae el archivo
	//esta es la diferencia con mvc, tu no vas, tu te traes a ti lo que necesitas
	//el siguiente archivo que debe habrir el estudiante es por ejemplo controlador/principal.php
	//y ver el contenido
    require_once("controlador/".$pagina.".php");
 }
 else{
    echo "PAGINA EN CONSTRUCCIÓN";
 }
?>
