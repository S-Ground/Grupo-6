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
  <div >
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
    


  <div class=" col-sm-5" ><br>
      <div class="card">
        <img class="align-items-center " src="./assets/img/humedad.png" style="width:30%">
        <h3>Humedad</h3>
        <p>30%</p>
      </div>
    </div>





    <div class="col-sm-5  "><br>
      <div class="card">
        <img class="align-items-center " src="./assets/img/temp.png" style="width:30%">
        <h3>Temperatura</h3>
        <p>34°C</p>
      </div>
    </div>
    <br>
    <div class="col-sm-5">
      <div class="card">
        <img class="align-items-center " src="./assets/img/acidez.png" style="width:30%">
        <h3>pH</h3>
        <p>6</p>
      </div>
    </div>
    <div class="col-sm-5 ">
      <div class="card  ">
        <img class="align-items-center " src="./assets/img/atmosf.png" style="width:30%">
        <h3>Presión atmosférica</h3>
        <p>0,1 Pascales</p>
      </div>
    </div>
    <div class="col-sm-5 ">
      <div class="card  ">
        <img class="align-items-center " src="./assets/img/uv.png" style="width:30%">
        <h3>Radiación ultravioleta</h3>
        <p>3 UV</p>
      </div>
    </div>
  </div>
  </div>

  <!-- TESTTTT -->

  


    <!-- Core -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../js/cards.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.js?v=1.2.0"></script>
    <!-- barra -->
    <script src="./assets/js/bar.js"></script>
    
    <script src="./assets/js/ocultar.js"></script>
</body>

</html>


