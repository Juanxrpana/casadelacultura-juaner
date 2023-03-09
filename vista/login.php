<?php require_once("comunes/head.php")?>
<?php require_once("comunes/barranotificacion.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/login.css">
  

    <title>Iniciar Sesion</title>
</head>
<body>
  <section class="izquierda"></section>

  <section class="derecha">
    <form action="" method="POST">
      <h2>Bienvenido al control de actividades</h2>
      <label for="usuario">USUARIO:</label>
      <input type="text" name="usuario" id="usuario">
      <label for="pass">CONTRASEÑA:</label>
      <input type="password" name="pass" id="pass">
    
      <div id="container">
      <button type="button" class="iniciar-sesion">
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
      <button type="button" class="iniciar-sesion">
         <span class="circle" aria-hidden="true">
          <span class="icon arrow">
          </span>
        </span>
        <span class="button-text">Registrar
          </span>
      </button>
      </div>
    </form>
  </section>
</body>
</html>