<?php
require_once('Conexion.php');
$term = $_GET['term'];

// Buscar los nombres de los responsable en la base de datos
$stmt = $pdo->prepare("SELECT DISTINCT responsable FROM actividades WHERE responsable LIKE ?");
$stmt->execute(["%$term%"]);
$resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Mostrar los resultados como un arreglo JSON
echo json_encode($resultados);
?>