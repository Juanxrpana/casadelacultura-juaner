<?php
    require_once('../modelo/Conexion.php');
    require_once ("../modelo/gestionactividad.php");
   /*  require_once ('../vendor/autoload.php');
    require_once('html2pdf.class.php');

    $html2pdf = new HTML2PDF('P', 'A4', 'es'); */
    $obj= new registro_actividad();
    $datos=$obj->mostraractividad();
    $path = '../img/fondo.jpg';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PDF</title>

    <style>
        body {
            background-image: url("<?= $base64 ?>");
            background-size: 750px 800px;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>





<div>

    <table style="border-collapse: collapse; z-index: 10;margin-top: 12%; margin-left: 2%;">
        <thead>
            <tr>
                <th style="text-align: center; border: 2px solid black";>Actividad</th>
                <th style="text-align: center; border: 2px solid black">Tipo de actividad</th>
                <th style="text-align: center; border: 2px solid black">Cantidad</th>
                <th style="text-align: center; border: 2px solid black">Estatus</th>
                <th style="text-align: center; border: 2px solid black">Responsable</th>
                <th style="text-align: center; border: 2px solid black">Fecha</th>
                <th style="text-align: center; border: 2px solid black">N° de participantes</th>
                <th style="text-align: center; border: 2px solid black">Salón</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($datos as $key => $value) :?>
            <tr>
            <td style="text-align: center; border: 2px solid black;"><?= $value['NombreActividad'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['NombreActividad'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['CantidadEncuentros'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['Estatus'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['responsable_RCedula'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['FechaActividad'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['Participantes'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['Salon_idSalon'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>


</html>