<?php
//inicio de sesion 
require '../controlador/db.php';

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
  </nav>



<!--Hisogramas -->
  <div class="main-content" id="panel">
  
<canvas id="myChart" style="position: relative; height: 30vh; width: 120vw;"></canvas>
  <br>
<div>
<canvas id="myChart" style="position: relative; height: 30vh; width: 120vw;"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart')

    var myChart = new Chart(ctx, {
        type:'line',
        data:{
            datasets: [{
                label: 'Humedad',
                backgroundColor: ['#6bf1ab','#63d69f', '#438c6c', '#509c7f', '#1f794e', '#34444c', '#90CAF9', '#64B5F6', '#42A5F5', '#2196F3', '#0D47A1'],
                borderColor: ['black'],
                borderWidth:1
            }]
        },
        options:{
            scales:{
                y:{
                    beginAtZero:true
                }
            }
        }
    })

    let url = 'http://localhost:3000/api/datos'
    fetch(url)
        .then( response => response.json() )
        .then( datos => mostrar(datos) )
        .catch( error => console.log(error) )


    const mostrar = (articulos) =>{
        articulos.forEach(element => {
            myChart.data['labels'].push(element.fecha)
            myChart.data['datasets'][0].data.push(element.temperatura)
        });
        console.log(myChart.data)
    }    
</script>

</div>
<br>
<!-- Histograma 2 -->






  </div>
xD



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
  <script src="./assets/js/jquery-3.6.0.js"></script>
  <!--grafico-->
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script> 
</body>
</html>
