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
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

  <script src="./assets/js/ocultar.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                <!--Primera configuracion -->
                <div class=" col-sm-5"><br>
                  <script>
                    $(document).ready(function() {
                      if (window.localStorage.getItem("div1") != null) {
                        var pb = window.localStorage.getItem("div1");
                        if (pb == "true") {
                          $(".div1").hide();
                        }
                      }

                      $("button1").click(function() {
                        var v = $(".div1").is(":visible")
                        $(".div1").fadeToggle(500, "swing");
                        window.localStorage.setItem("div1", v)
                      });
                    });

                    //test de coloreo
                    miStorage = window.localStorage;

                    var estado = localStorage.getItem('estado');

                    if (estado == 1)
                      day();
                    else if (estado == 0)
                      dark();

                    function dark() {
                      localStorage.setItem('estado', 0);
                      
                    }

                    function day() {
                      localStorage.setItem('estado', 1);
                      document.body.style.background = '#f1f1f1';
                      document.getElementById('main-cont').classList.remove('dark-bg');
                      document.getElementById('main-cont').classList.add('day-main');
                      document.getElementById("post-title-data").style.color = "black"
                    }
                  </script>
                  <div class="card ">
                    <h3>Humedad</h3>
                    <button1 type="button" class="btn btn-warning" id="humedad">Activar/Desactivar</button1>
                  </div>
                </div>
                <p class="div1"></p>
                <!--segunda configuracion -->
                <div class=" col-sm-5"><br>
                  <script>
                    $(document).ready(function() {
                      if (window.localStorage.getItem("div2") != null) {
                        var pb = window.localStorage.getItem("div2");
                        if (pb == "true") {
                          $(".div2").hide();
                        }
                      }

                      $("button2").click(function() {
                        var v = $(".div2").is(":visible")
                        $(".div2").fadeToggle(500, "swing");
                        window.localStorage.setItem("div2", v)
                      });
                    });
                  </script>
                  <div class="card ">
                    <h3>temperatura</h3>
                    <button2 type="button" class="btn btn-warning" id="temperatura">Activar/Desactivar</button2>
                  </div>
                </div>
                <p class="div2"></p>


                <!--tercera configuracion -->
                <div class=" col-sm-5"><br>
                  <script>
                    $(document).ready(function() {
                      if (window.localStorage.getItem("div3") != null) {
                        var pb = window.localStorage.getItem("div3");
                        if (pb == "true") {
                          $(".div3").hide();
                        }
                      }

                      $("button3").click(function() {
                        var v = $(".div3").is(":visible")
                        $(".div3").fadeToggle(500, "swing");
                        window.localStorage.setItem("div3", v)
                      });
                    });
                  </script>
                  <div class="card ">
                    <h3>ph</h3>
                    <button3 type="button" class="btn btn-warning" id="temperatura">Activar/Desactivar</button3>
                  </div>
                </div>
                <p class="div3"></p>
                <!--cuarta configuracion -->
                <div class=" col-sm-5"><br>
                  <script>
                    $(document).ready(function() {
                      if (window.localStorage.getItem("div4") != null) {
                        var pb = window.localStorage.getItem("div4");
                        if (pb == "true") {
                          $(".div4").hide();
                        }
                      }

                      $("button4").click(function() {
                        var v = $(".div4").is(":visible")
                        $(".div4").fadeToggle(500, "swing");
                        window.localStorage.setItem("div4", v)
                      });
                    });
                  </script>
                  <div class="card ">
                    <h3>Presion Atmosferica</h3>
                    <button4 type="button" class="btn btn-warning" id="temperatura">Activar/Desactivar</button4>
                  </div>
                </div>
                <p class="div4"></p>

                <!--Quinta configuracion -->
                <div class=" col-sm-5"><br>
                  <script>
                    $(document).ready(function() {
                      if (window.localStorage.getItem("div5") != null) {
                        var pb = window.localStorage.getItem("div5");
                        if (pb == "true") {
                          $(".div5").hide();
                        }
                      }

                      $("button5").click(function() {
                        var v = $(".div5").is(":visible")
                        $(".div5").fadeToggle(500, "swing");
                        window.localStorage.setItem("div5", v)
                      });
                    });
                  </script>
                  <div class="card ">
                    <h3>Radiación ultravioleta</h3>
                    <button5 type="button" class="btn btn-warning" id="temperatura">Activar/Desactivar</button5>
                  </div>
                </div>
                <p class="div5"></p>
                <!--Fin configuracion -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- TESTTTT -->




</body>

</html>