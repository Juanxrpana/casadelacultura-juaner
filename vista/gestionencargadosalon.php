<?php require_once ("./comunes/insertarModal.php")?>
<?php require_once("comunes/head.php")?>
<?php require_once("comunes/barranotificacion.php")?>
<!DOCTYPE html>
    <head>  
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <title>Gestion Encargados Salon</title>
    </head>

<body id="body">

<div class="menu__side">

    <div class="name__page">
        <span class="bolded">SICIGA 2022</span>
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
                    <div class="row">
                    <div class="col-5">
                        <button class="btn btn-success" data-toggle="modal" data-target="#insertarModal" id="incluir" name="incluir"><i class="fas fa-plus-circle"></i> Nuevo registro </button>
                    </div>
                    <div class="col-5">
                        <a href="?pagina=registro" class="btn btn-secondary">REGRESAR</a>
                    </div>          
                    </div>
         </div>

    </div>

    <!-- linea abajo-->
    <div class="row">
        <div class="col">
            <hr/>
        </div>
    </div>

    </div>

        
    </form>

    <hr>
    
    <h2 class="textoecentrado">Lista de encargados de los salones</h2>
    

    <div class="modal-footer bg-light">
        <div class="col"></div>
    </div>

    <div id="tablaDatos"></div>

</div> <!-- fin de container -->



</main>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/script.js"></script>
    <script src="js/registro_salon.js"></script>
    <script src="js/sweetalert.min.js" ></script>
</body>
</html>