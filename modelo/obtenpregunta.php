<?php 

    require_once 'gestionusuarios.php';

$seguridad = new registro_usuario();
$preguntas = $seguridad->consultapregunta();
$preguntas_json = json_encode($preguntas);
echo $preguntas_json;

?>