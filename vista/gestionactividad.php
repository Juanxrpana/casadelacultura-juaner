<?php require_once ("comunes/Modalactividad.php")?>
<?php require_once ("comunes/ModalResponsable.php")?>
<?php require_once("comunes/head.php")?>
<?php require_once("comunes/barranotificacion.php")?>




<!DOCTYPE html>
<head>
<link rel="stylesheet" href="./css/formvalid.css">
<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Gestion Actividad</title>
</head>

<body id="body">

 <?php require_once("comunes/menu.php")?>
<main>

<div class="container"> 
        <div class="botoneraencargado">
                   
                        
                        <br>
                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#ModalResponsable" id="incluirResponsable" name="incluirResponsable"><i class="fas fa-plus-circle"></i> Nuevo Responsable </button>
                    
                    
                    </div>     

            </div>

            <!-- linea abajo-->
            <hr>

        </div>

        
    </form>

    <hr>

    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="actividades-tab" data-toggle="tab" href="#actividades" role="tab" aria-controls="actividades" aria-selected="true">Lista de Actividades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="responsables-tab" data-toggle="tab" href="#responsables" role="tab" aria-controls="responsables" aria-selected="false">Lista de Responsables</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="actividades" role="tabpanel" aria-labelledby="actividades-tab">
    <h2 class="textoecentrado">Lista de Actividades</h2>
    <div class="modal-footer bg-light">
        <div class="col"></div>
    </div>
    <div id="tablaDatosActividad"></div>
  </div>
  <div class="tab-pane fade" id="responsables" role="tabpanel" aria-labelledby="responsables-tab">
    <h2 class="textoecentrado">Lista de Responsables</h2>
    <div class="modal-footer bg-light">
        <div class="col"></div>
    </div>
    <div id="tablaDatosResponsable"></div>
  </div>
</div>



</div> <!-- fin de container -->



</main>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/registro_actividad.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert.min.js" ></script>

</body>

</html>