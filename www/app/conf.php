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
    <!--Configuracion-->
    <br>
    <div class="container" style="max-width: 700px; min-width: 400px;">
      <div class="card">
        <h2 class="card-header text-center">Modificar estado de sensores</h2>
        <div class="card-body">
          <form id="myForm" onsubmit="return validar()">
            <div class="form-group">

              <div class="row justify-content-center">
                <div class=" col-sm-5" id="humedad"><br>
                  <div class="card">
                    <h3>Humedad</h3>
                    <button type="button" class="btn btn-warning" id="humedad">Activar/Desactivar</button>

                  </div>
                </div>

                <div class="col-sm-5  "><br>
                  <div class="card">
                    <h3>Temperatura</h3>
                    <button type="button" class="btn btn-warning" id="temperatura">Activar/Desactivar</button>

                  </div>
                </div>
                <br>
                <div class="col-sm-5">
                  <div class="card">
                    <h3>pH</h3>
                    <button type="button" class="btn btn-warning" id="ph">Activar/Desactivar</button>


                  </div>
                </div>
                <div class="col-sm-5 ">
                  <div class="card  ">
                    <h3>Presión atmosférica</h3>
                    <button type="button" class="btn btn-warning" id="presion">Activar/Desactivar</button>


                  </div>
                </div>
                <div class="col-sm-5 ">
                  <div class="card  ">
                    <h3>Radiación ultravioleta</h3>
                    <button type="button" class="btn btn-warning" id="uv">Activar/Desactivar</button>


                  </div>
                </div>
              </div>
            </div>
          </form>
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
</body>

</html>