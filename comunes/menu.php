 <div class="menu__side" id="menu_side">

    <?php  
    error_reporting(E_ERROR);
      if(empty($_SESSION)){
      session_start();
      }
        if(isset($_SESSION['user'])){
         
       $nivel = $_SESSION['user'][0][0];
       $cedulaUser = $_SESSION['user'][0][1];
       $nombre = $_SESSION['user'][0][2];

      }   
      else{
        $nivel = "";
      }
      ?> 

    <div class="name__page">
        <span class="bolded"><img src="./img/Recurso3.png" alt="" style="width: 180;"></span>
        </div>
        
        <div class="opciones__menu">

        <a href="?pagina=principal" class="primero">
                <div class="option">
                <i class="fas fa-home" title="Inicio"></i>
                <h4>Inicio</h4>
            </div>
        </a>

        <a href="?pagina=registro" >
                <div class="option">
                    <i class="far fa-file" title="Registro"></i>
                    <h4>Registrar</h4>
                </div>
            </a>

            <a href="?pagina=reporte">
                <div class="option">
                    <i class="far fa-address-card" title="reporte"></i>
                    <h4>Reporte</h4>
                </div>
            </a>
            
            <div id="noti">
                <div class="option">
                    <i class="far fa-sticky-note" title="Notificaciones"></i>
                    <h4>Notificaciones</h4>
                </div>
            </div>

            <?php  if($nivel == "admin"){?>
            
          
            <a href="?pagina=gestionusuarios">
                <div class="option">
                    <i class="far fa-address-card" title="Usuario"></i>
                    <h4>Usuario</h4>
                </div>
            </a>


            <?php } else { ?>
                <?php }?>



             <a href="?pagina=cerrar_sesion">
                <div class="option">
                    <i class="far fa-address-card" title="Usuario"></i>
                    <h4>Cerrar Sesión</h4>
                </div>
            </a>

           <!--  <a href="?pagina=gestionusuarios" style="margin-top: 100px;">
                <div class="option">
                <img src = "./img/user-gear-blanco.svg" style="width: 30; height: 33px;"/>
                    <h4 style="padding-left: 10px">Configuración</h4>
                </div>
            </a> -->

        </div>

    </div>