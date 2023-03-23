<?php require_once("comunes/head.php");?>
<?php require_once("comunes/barranotificacion.php")?>
<!DOCTYPE html>
<head>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Principal</title>
    </head>
<body id="body">

    <header>
        
    </header>
  

    <?php require_once("comunes/menu.php")?>
    
<main>

<div class="container">
      <div class="banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="?pagina=principal">Inicio</a></li>
                <li class="breadcrumb-item active">Registro</li>
              </ul>
            </nav>
            <h1 class="text-center">Registrar</h1>
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
              <h5 class="text-secondary">Salon</h5>
              <p>Gestionar Salon</p>
              <a href="?pagina=gestionsalon" class="btn btn-primary">Gestionar</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service">
            <div class="header">
              <img src="img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Actividad</h5>
              <p>Gestionar Actividad</p>
              <a href="?pagina=gestionactividad" class="btn btn-primary">Gestionar</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
</div>



</main>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/script.js"></script>
    <script src="js/registro_salon.js"></script>
    <script src="js/sweetalert.min.js" ></script>
</body>
</html>