<?php
//inicio de sesion 
session_start();
$usuario = $_SESSION['username'];
//Sin acceso a sesion, lo devuelve a login.php

if (!isset($usuario)) {
  header("location: ../controlador/login.php");
} else {
  //boton de deslogear
  "<a href='../controlador/salir.php'>SALIR</a>";
}
//Obtenemos los datos desde el api
$contenido = file_get_contents("http://localhost/apirest_php/datos.php");
//transformamos dato JSON a variable php
$info_clima = json_decode($contenido);
//obtenemos el ultimo dato del array
$ultimo_clima = end($info_clima);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Sensores</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Letras -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Iconos -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/css/cards.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <!-- Barra lateral -->
  <link rel="stylesheet" href="./assets/css/bar.css">
</head>
<body>
  <!-- barra lateral-->
  <nav class=" navbar-vertical  fixed-left  navbar-expand-xs navbar-light " id="sidenav-main">
    <div class="nav-item">
      <div>
        <br>
        <ul>
          <!--Consulta a base de datos por usuario-->
          <?php
          echo "<h1>BIENVENIDO $usuario</h1> ";
          ?>
          <br><br>
          <span class="nav-item">
            <a class="nav-link active" href="index.php">
              <i class="fas fa-tv text-primary"></i>
              <span class="nav-link-text">Sensores</span>
            </a>
          </span>
          <br>
          <span class="nav nav">
            <a class="nav-link active" href="histograma.php">
              <i class="fas fa-chart-pie text-green"></i>
              <span class="nav-link-text">Histograma</span>
            </a>
          </span>
          <br>
          <span class="nav nav">
            <a class="nav-link active" href="conf.php">
              <i class="fas fa-cogs text-default"></i>
              <span class="nav-link-text">Configuracion</span>
            </a>
          </span>
          <br>
          <!-- salir de sesion -->
          <span class="nav-item">
            <a class="active active-pro" href='../controlador/salir.php'>
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-link-text">Salir</span>
            </a>
          </span>
        </ul>
      </div>
    </div>

  </nav>
  <!--tarjetas -->
  <div class="main-content" id="panel">
    <!--Paneles de informacion (humedad, temperatura, pH, Presion atmosferica, radiacion UV)-->
    <div class="row justify-content-center" ">
  <div class=" col-sm-5"><br>
      <div class="card">
        <img class="align-items-center " src="./assets/img/humedad.png" style="width:20%">
        <h3>Humedad</h3>
        <!--hacemos un echo para mostrar datos que se requieren -->
        <p id="humedad_dinamica"><?php echo $ultimo_clima->humedad; ?> %</p>
      </div>
    </div>
    <div class="col-sm-5  "><br>
      <div class="card">
        <img class="align-items-center " src="./assets/img/temp.png" style="width:20%">
        <h3>Temperatura</h3>
        <p id="temperatura_dinamica"><?php echo $ultimo_clima->temperatura; ?> °C </p>
      </div>
    </div>
    <br>
    <div class="col-sm-5">
      <div class="card">
        <img class="align-items-center " src="./assets/img/acidez.png" style="width:20%">
        <h3>pH</h3>
        <p id="ph_dinamico"><?php echo $ultimo_clima->ph; ?></p>
      </div>
    </div>
    <div class="col-sm-5 ">
      <div class="card  ">
        <img class="align-items-center " src="./assets/img/atmosf.png" style="width:20%">
        <h3>Presión atmosférica</h3>
        <p id="presion_dinamica"><?php echo $ultimo_clima->presion; ?> hPa</p>
      </div>
    </div>
    <div class="col-sm-5 ">
      <div class="card  ">
        <img class="align-items-center " src="./assets/img/uv.png" style="width:20%">
        <h3>Radiación ultravioleta</h3>
        <p id="radiacion_dinamica"><?php echo $ultimo_clima->uv; ?> UV</p>
      </div>
    </div>
  </div>
  </div>
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <!--actualizado de datos en tiempo real-->
  <script>
    $(document).ready(function() {
      console.log("ready!");
      //se establece un tiempo estimado para solicitar los datos
      var interval = 1000; // 1000 = 1 second, 3000 = 3 seconds
      function doAjax() {
        $.ajax({
          type: 'POST',
          url: 'http://localhost/apirest_php/datos.php',
          data: {
            'lugar': 'home'
          },
          dataType: 'json',
          
          success: function(json) {
            //otorgramos la id para poder actualizar
            $('#temperatura_dinamica').html(json.temperatura + " °C");
            $('#humedad_dinamica').html(json.humedad + " %");
            $('#ph_dinamico').html(json.ph);
            $('#presion_dinamica').html(json.presion+ " hPa");
            $('#radiacion_dinamica').html(json.uv + " UV");
          },
          complete: function(json) {
      
            setTimeout(doAjax, interval);
          }
        });
      }
      setTimeout(doAjax, interval);
    });
  </script>
</body>
</html>