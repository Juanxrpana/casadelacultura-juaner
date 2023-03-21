<?php 

    require_once 'gestionactividad.php';

$responsable = new registro_actividad();
$responsable = $responsable->consultaresponsable();
$responsable_json = json_encode($responsable);
echo $responsable_json;

?>