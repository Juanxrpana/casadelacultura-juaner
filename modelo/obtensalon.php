<?php 

    require_once 'gestionactividad.php';

$actividad = new registro_actividad();
$salones = $actividad->consultaSalon();
$salones_json = json_encode($salones);
echo $salones_json;

?>