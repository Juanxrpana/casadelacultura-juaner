<?php require_once("comunes/head.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="./css/login.css">
  <title>Iniciar Sesion</title>
</head>
<body>

  <section class="izquierda">


    <img src="./img/slide(1).jpg" alt="" style="width: 90%;">
    
    


<div id="mensajes" style="display:none">
          <?php
            if(!empty($mensaje)){
              echo $mensaje;
            }
          ?>  
          </div>
  </section>

  <section class="derecha">
    <form class="form-signin" action="" method="post" id="f">
      <h2>Bienvenido al control de actividades</h2>
      <label for="usuario">CEDULA:</label>
      <input type="text" name="IdUsuario" id="IdUsuario">
      <label for="clave">CONTRASEÑA:</label>
      <input type="password" name="clave" id="clave">
    
      <div id="container">
      <button type="button" class="iniciar-sesion" id="iniciar">
         <span class="circle" aria-hidden="true">
          <span class="icon arrow">
          </span>
        </span>
        <span class="button-text">Iniciar Sesion
          </span>
      </button>
      </div>
      <br>
      <div id="container2">
      <button type="button" class="iniciar-sesion" >
         <span class="circle" aria-hidden="true">
          <span class="icon arrow">
          </span>
        </span>
        <span class="button-text">Recordar contraseña
          </span>
      </button>
      </div>
    </form>
  </section>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="./js/registro_login.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="/js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert.min.js" ></script>
  
</body>
</html>