<?php

session_start();
$usuario=$_SESSION['username'];

if(!isset($usuario)){
    header("location: ../controlador/login.php");

}else{



echo "<h1>BIENVENIDO $usuario</h1> ";

echo "<a href='../controlador/salir.php'>SALIR</a>";
}


?>

