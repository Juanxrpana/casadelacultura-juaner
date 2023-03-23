<?php require_once("comunes/head.php");?>
<?php require_once("comunes/barranotificacion.php")?>
<!DOCTYPE html>
<head>
    
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    
    <title>Principal</title>
    </head>
<body id="body">

    <?php require_once("comunes/menu.php")?>
    
<main>



 <div class="container">
      <div class="bannerfoto">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="?pagina=principal">Inicio</a></li>
                <li class="breadcrumb-item active">Reporte</li>
              </ul>
            </nav>
            <h1 class="text-center">Reportes</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="offset-2 col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Responsables</h5>
              <p>Directorio de Responsables</p>
              <a href="./reporte/imprimir2.php" class="btn btn-primary">Generar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Actividades</h5>
              <p>Reporte de Actividades</p>
              <a href="./reporte/imprimir.php" class="btn btn-primary">Generar</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
</div>



   
 </main>
 <div class="bottom">ABAJO</div>
<!-- <script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js" ></script>
<script src="js/bootstrap.min.js" ></script> -->
<!-- <script src="js/script.js"></script> -->
</body>
</html>