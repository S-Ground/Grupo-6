<?php

//inicio de sesion 

session_start();
$usuario=$_SESSION['username'];
//Sin acceso a sesion, lo devuelve a login.php


if(!isset($usuario)){
    header("location: ../controlador/login.php");

}else{

//boton de deslogear
 "<a href='../controlador/salir.php'>SALIR</a>";
}

?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sensores</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

  
  <!-- responsvie -->
  
  <!-- Icons -->
  
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../css/cards.css" >
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>

 <!-- TESTTTTT -->
 <!-- Sidenav -->
 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
     
        <!-- Collapse -->
     
          <!-- Nav items -->
         
          <!-- Divider -->
          <hr class="my-3">
         
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
 
   <!--tarjetas --> 
    <div class="main-content"id="panel">
    

<br>

<div class="row">
  <div class="column">
    <div class="card">
    <img class="align-items-center " src="./assets/img/humedad.png" style="width:40%">
    <h3>Humedad</h3>
      <p>Some text</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img class="align-items-center " src="./assets/img/temp.png" style="width:40%">
      <h3>Temperatura</h3>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img class="align-items-center " src="./assets/img/acidez.png" style="width:40%">
      <h3>pH</h3>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img class="align-items-center " src="./assets/img/atmosf.png" style="width:40%">
      <h3>Presión atmosférica</h3>
      <p>Some text</p>
    </div>
  </div>
</div>
</div>

 <!-- TESTTTT -->



 
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
        <img src="assets/img/brand/logo.png" width=60" height="200" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
   

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
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

            


  
          <!-- Navigation -->
          
          
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
   <!-- responsive -->
</body>

</html>
