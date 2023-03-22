<link rel="stylesheet" href="./css/notificacion.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">


<div class="notificacion" id="notificacion">
  <div class="titulo" style=" margin-left: 50px; color: white; margin-bottom: 30px;">Centro de notificaciones</div>
  
   <?php

      require_once ('./modelo/Conexion.php');
      $conexion = new Conexion();
      $pdo = $conexion->conecta();

      // Define la consulta SQL para obtener las actividades
      $sql = "SELECT * FROM actividad"; /* ORDER BY FechaActividad DESC"; */
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $actividades = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // Ejecuta la consulta y almacena el resultado en una variable
      /* $resultado = mysqli_query($conecta, $sql); */

     // Si hay al menos una fila de resultado
    if (count($actividades) > 0) {
  // Inicia la lista
  echo '<ol class="list-group list-group-numbered">';
        
  // Recorre todas las filas de resultado
  foreach ($actividades as $fila) {
      // Crea un nuevo item de lista para cada fila
      echo '<li class="list-group-item d-flex justify-content-between align-items-start">';
            
      // Muestra el nombre de la actividad como subheading
      echo '<div class="ms-2 me-auto"><div class="fw-bold">'.$fila["NombreActividad"].'</div>';
            
      // Muestra la fecha de la actividad
      echo $fila["FechaActividad"].'</div>';
            
      // Muestra la cantidad de participantes
      echo '<span class="badge bg-primary rounded-pill">'.$fila["Participantes"].'</span>';
            
      // Cierra el item de lista
      echo '</li>';
  }
        
  // Cierra la lista
  echo '</ol>';
  } else {
    // Si no hay resultados, muestra un mensaje
    echo "No hay actividades registradas.";
  }

    // Cierra la conexión a la base de datos
    $pdo = null;
    ?>

      
</div>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="./js/notificaciones.js"></script>