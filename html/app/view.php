<?php

//inicio de sesion 

session_start();
$usuario=$_SESSION['username'];
//Sin acceso a sesion, lo devuelve a login.php


if(!isset($usuario)){
    header("location: ../controlador/login.php");

}else{





echo "<h1>BIENVENIDO $usuario</h1> ";
//boton de deslogear
echo "<a href='../controlador/salir.php'>SALIR</a>";
}


?>

