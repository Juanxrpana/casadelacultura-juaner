<?php require_once ("./comunes/insertarModal.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Framework Boostrap-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ecd5745f4f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
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






            <href class="btn btn-primary" data-toggle="modal" data-target="#insertarModal">Nuevo registro
									<i class="fas fa-plus-circle"></i> 

            </div>

            <!-- linea abajo-->
            <div class="row">
            <div class="col">
            <hr/>
            </div>
            </div>

            <!-- botonera-->
            <div class="botoneraencargado">

                <div class="row">

                <div class="col-5">
                    <button class="btn btn-primary" id="incluir" name="incluir">INCLUIR</button>
                </div>

                <div class="col">
                    <a href="?pagina=registro" class="btn btn-primary">REGRESAR</a>
                </div>          
                </div>

            </div>
            <br></br>
           
                   
        
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

   

    <!-- <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script> -->
    <script src="js/script.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script src="js/script.js" ></script>

</body>

</html>