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
  <title>Histograma</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
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
              <i class="ni ni-tv-2 text-primary"></i>
              <span class="nav-link-text">Sensores</span>
            </a>
          </span>
          <br>
          <span class="nav nav">
            <a class="nav-link active" href="histograma.php">
              <i class="ni ni-chart-pie-35 text-green"></i>
              <span class="nav-link-text">Histograma</span>
            </a>
          </span>
          <br>
          <span class="nav nav">
            <a class="nav-link active" href="conf.php">
              <i class="ni ni-settings-gear-65 text-default"></i>
              <span class="nav-link-text">Configuracion</span>
            </a>
          </span>
          <br>
        <!-- salir de sesion -->
          <span class="nav-item">
                          <a class="active active-pro" href='../controlador/salir.php'>
                            <i class="ni ni-user-run"></i>
              <span class="nav-link-text">Salir</span>
            </a>
          </span>
    </ul>
  </div>
</div>
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>
</html>
