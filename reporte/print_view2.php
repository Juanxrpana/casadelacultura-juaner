<?php
    require_once('../modelo/Conexion.php');
    require_once ("../modelo/gestionresponsable.php");
  

    $obj= new registro_responsable();
    $datos=$obj->mostrarDatosresponsable();

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





<div style="margin-top: 12%; margin-left: 10%;">
        <p1><b>Directorio Responsables Registrados</b></p1>
        <br></br>
    <table style="border-collapse: collapse; z-index: 10;">
        <thead>
            <tr>
            <th style="text-align: center; border: 2px solid black">V o E</th>
                <th style="text-align: center; border: 2px solid black";>Numero de cédula</th>
                <th style="text-align: center; border: 2px solid black">Nombres</th>
                <th style="text-align: center; border: 2px solid black">Apellidos</th>
                <th style="text-align: center; border: 2px solid black">Telefono</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($datos as $key => $value) :?>
            <tr>
            <td style="text-align: center; border: 2px solid black;">
  <?php if ($value['Nacionalidad_idNacionalidad'] == 1): ?>
    V
  <?php elseif ($value['Nacionalidad_idNacionalidad'] == 2): ?>
    E
  <?php endif; ?>
</td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['RCedula'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['Nombre1'] . ' ' . $value['Nombre2'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['Apellido1'] . ' ' . $value['Apellido2'] ?></td>
            <td style="text-align: center; border: 2px solid black;"><?= $value['Telefono'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>


</html>