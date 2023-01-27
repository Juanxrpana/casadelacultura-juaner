<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Framework Boostrap-->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <title>Principal</title>
    </head>
<body id="body">

    <header>
        
    </header>
  

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
            
    <form action="store" method="POST">
            
        <div class="container">

                    <div class="row">

                    <div class="col">

                    <label for="nombredesalon">Nombre de Salon</label>

                    <input class="form-control" type="text" id="NombreSalon" name="NombreSalon" />
        
                    <span id="sNombreSalon"></span>

                </div>

                    <div class="col mb-3">
		             <label for="numsalon">Numero de salon</label>
		                <select class="form-control" id="NumSalon" name="NumSalon">
		   		            <option disabled="" selected="" value="">0</option>
				            <option value="1">1</option>
				            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
		                </select>
		            </div>
                

            </div>

            <div class="row">
           
            <div class="col">

                <label for="clave">Cantidad de Sillas</label>

                <input class="form-control" type="text" id="cansillas" name="cansillas"/>

            </div>
                     
                <div class="col">

                <label for="clave">Capacidad de Salon</label>

                <input class="form-control" type="text" id="capsalon" name="capsalon"/>
                
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
            <div class="row">

                <div class="col">
                    <button type="submit" class="btn btn-primary" id="incluir" name="incluir">INCLUIR</button>
                </div>

                <div class="col">
                    <a href="?pagina=registro" class="btn btn-primary">REGRESAR</a>
                </div>

            </div>
        
        </div>
    </form>
</div> <!-- fin de container -->



</main>
<script src="js/script.js">mostrar();</script>
   
</body>
</html>    