<?php
ob_start();
//inicio de sesion 
require '../controlador/db.php';

session_start();

$usuario = $_SESSION['username'];
//Sin acceso a sesion, lo devuelve a login.php
if (!isset($usuario)) {
  header('location: ../controlador/login.php');

} else {
  
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
  <!-- letra -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="./assets/css/bar.css">

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  

  <script src="https://cdn.plot.ly/plotly-2.1.0.min.js"></script>
</head>

<body>
  <!-- barra lateral-->
  <nav class=" navbar-vertical  fixed-left  navbar-expand-xs navbar-light " id="sidenav-main">
    <div class="nav-item">
      <div>
        <br>
        <ul>
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
  <!--Hisogramas -->
  <div class="main-content" id="panel"> <br>
    
    
  <div id="chart"></div>
        <script>
            function getData() {
                return Math.random();
            }  
            Plotly.plot('chart',[{
                y:[getData()],
                type:'line'
            }]);
            
            var cnt = 0;
            setInterval(function(){
                Plotly.extendTraces('chart',{ y:[[getData()]]}, [0]);
                cnt++;
                if(cnt > 500) {
                    Plotly.relayout('chart',{
                        xaxis: {
                            range: [cnt-500,cnt]
                        }
                    });
                }
            },15);
        </script>






















    <!--Ultimo div panel-->
  </div>

  <!--grafico-->
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
</body>

</html>