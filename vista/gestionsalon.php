<?php require_once ("./comunes/insertarModal.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Framework Boostrap-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
    <title>Gestion Salon</title>
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
            
            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>Notificaciones</h4>
                </div>
            </a>

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
                        <button class="btn btn-success" data-toggle="modal" data-target="#insertarModalSalon" id="incluirSalon" name="incluirSalon"><i class="fas fa-plus-circle"></i> Nuevo Salon </button>
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

    
    <h2 class="textoecentrado">Lista de salones</h2>
    

    <div class="modal-footer bg-light">
        <div class="col"></div>
    </div>

    <div id="tablaDatosSalon"></div>

</div> <!-- fin de container -->



</main>
    <script src="js/script.js"></script>
    <script src="js/sweetalert.min.js" ></script>

</body>

</html>