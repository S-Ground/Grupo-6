<?php
ob_start();
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
  <!-- ocultar -->
  <script src="../app/assets/js/ocultar.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
      document.documentElement.classList.add('js');
    </script>
    <link rel="stylesheet" href="../app/assets/css/ocultar.css">
  



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


    <div class="alert">
    <span class="closebtn">&times;</span>
      Our office will be closed from Friday 23rd December and re-open Wednesday 11th January.
    </div>


    <p>
      <a href="#">Clear storage</a>
    </p>

    <script>
      const showMsg = localStorage.getItem('showMsg');

      if(showMsg !== 'false'){
        $('.alert').show();
      }

      $('.closebtn').on('click', function(){
        $('.alert').fadeOut('slow');
        localStorage.setItem('showMsg', 'false');
      });

      $('a').on('click', function(e){
        e.preventDefault();
        localStorage.setItem('showMsg', null);
      });
    </script>


  </div>

</body>

</html>