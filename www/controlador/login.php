    <!DOCTYPE html>
  <html lang="es">

  <head>
      <title>login</title>
      <link rel="stylesheet" href="../app/assets/css/bar.css">
      <link rel="stylesheet" href="../app/assets/css/log.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  </head>

  <body>
      <div class="login">
          <div class="login-triangle"></div>
          <h2 class="login-header">Inicio de sesión</h2>
          <form class="login-container" action="loguear.php" method="post">
              <p>Usuario <input type="text" placeholder="ingrese su rut" name="usuario"></p>
              <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="clave"></p>
              <div align="mensaje">
                <?php if(isset($_GET['error']) && $_GET['error'] == 'true'): ?>
                    <center><h2>¡Sus datos no son correctos!</h2></center>
                <?php endif; ?>
            </div>
              <input type="submit" value="Ingresar">
              
            
          </form>
      </div>
  </body>

  </html>