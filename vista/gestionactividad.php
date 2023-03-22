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

<div class="menu__side">

    <div class="name__page">
        <span class="bolded"><img src="./img/Recurso3.png" alt="" style="width: 180;"></span>
        </div>
        
        <div class="opciones__menu">

        <a href="?pagina=principal">
                <div class="option">
                <i class="fas fa-home" title="Inicio"></i>
                <h4>Inicio</h4>
            </div>
        </a>

        <a href="?pagina=registro"  class="primero">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>Registrar</h4>
                </div>
            </a>
            
            <div id="noti">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>Notificaciones</h4>
                </div>
            </div>

            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <h4>Usuario</h4>
                </div>
            </a>

        </div>

    </div>
<main>

<div class="container"> 
        <div class="botoneraencargado">
                   
                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#ModalActividad" id="incluirActividad" name="incluirActividad"><i class="fas fa-plus-circle"></i> Nueva Actividad </button>
                        <br>
                        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#ModalResponsable" id="incluirResponsable" name="incluirResponsable"><i class="fas fa-plus-circle"></i> Nuevo Responsable </button>
                    
                    
                    </div>     

            </div>

            <!-- linea abajo-->
            <hr>

        </div>

        
    </form>

    <hr>

    
    <h2 class="textoecentrado">Lista de Actividades</h2>
    

    <div class="modal-footer bg-light">
        <div class="col"></div>
    </div>

    <div id="tablaDatosActividad"></div>

    <hr>
    
    <h2 class="textoecentrado">Lista de Responsables</h2>

    <div class="modal-footer bg-light">
        <div class="col"></div>
    </div>



    <div id="tablaDatosResponsable"></div>

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