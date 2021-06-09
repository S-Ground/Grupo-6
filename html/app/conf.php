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
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="./assets/css/cards.css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">

</head>

<body>

  <!-- Separador  -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  </nav>

  <!--tarjetas -->
  <div class="main-content" id="panel">

    <!--boton barra-->
    <div id="sidebar2">
      <div class="toggle-btn">
        <span>&#9776;</span>
      </div>
    </div>
    <br>


    <div class="row justify-content-center" ">



    <button class=" buttomhum" onclick="ShowHideElements()">Ocultar humedad</button>

      <!-- TESTTTT -->








      <!-- Sidenav -->

      <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">

        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">


            <div class="main-content" id="panel">



            </div>
            <a class="navbar-brand" href="javascript:void(0)">
              <img src="assets/img/brand/logo.png" width=60" height="200" alt="...">
            </a>
          </div>

          <div class="navbar-inner">
            <!-- Barra lateral -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Secciones de navegacion-->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span style="color: #000000" class="nav-link-text">Sensores</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="histograma.php">
                    <i class="ni ni-chart-pie-35 text-green"></i>
                    <span style="color: #000000" class="nav-link-text">Histograma</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="conf.php">
                    <i class="ni ni-settings-gear-65 text-default"></i>
                    <span style="color: #000000" class="nav-link-text">Configuracion</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active active-pro" href='../controlador/salir.php'>

                    <i class="ni ni-user-run text-dark"></i>
                    <span class="nav-link-text">Salir</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>




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
        <!-- conf -->
        <script src="assets/js/jquery-3.6.0.js"></script>
        <script src="assets/js/ocultar.js"></script>
    

</body>

</html>