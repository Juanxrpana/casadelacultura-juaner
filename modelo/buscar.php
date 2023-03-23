<?php
require_once('Conexion.php');

$responsable = $_POST['responsable'];

$co = $this->conecta();
		$co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql=$co->prepare("SELECT NombreActividad, FechaActividad, Participantes, CantidadEncuentros, responsable_RCedula
        Salon_idSalon FROM actividad");