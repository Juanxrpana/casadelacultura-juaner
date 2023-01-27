<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Framework Boostrap-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ecd5745f4f.js" crossorigin="anonymous"></script>
    
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

<div class="container"> <!-- todo el contenido ira dentro de esta etiqueta-->
            
    <form method="post" action=; id="f">
            
        <div class="container">

                    <div class="row">

                    <div class="col">

                    <label for="clave">Fecha de nacimiento</label>

                    <input class="form-control" type="date" id="fechanacimiento" name="fechanacimiento"/>
                    </div>


                    <div class="col">

                    <label for="cedula">Cedula</label>

                    <input class="form-control" type="text" id="cedula" name="cedula"/>
        
                    <span id="scedula"></span>

                 
                </div>

                

            </div>

            <div class="row">
           
            <div class="col">

                <label for="usuario">Nombres</label>

                <input class="form-control" type="text" id="nombre" name="nombre" />

                <label for="usuario">Apellidos</label>

                <input class="form-control" type="text" id="apellido" name="apellido" />
                


            </div>

            <div class="col">

                <label for="clave">Telefono</label>

                <input class="form-control" type="text" id="telefono" name="telefono"/>
            </div>

           
            <!--cierre div row usuario clave-->
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
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript">mostrar();</script>

</body>

</html>