<?php
require "db.php";
ob_start();
//inicio de sesion 
session_start();

//inicio de sesion 
$usuario = $_SESSION['username'];

if (isset($_POST['update'])){
    $sql = ("UPDATE usuarios
    SET nombreOrg = '$_POST[nombreOrg]', clave = '$_POST[clave]'
    WHERE usuario = '$usuario'");
     header("location: ../app/conf.php");
}  else {
    echo "Nothing was posted";
    }
    //ejecucion en motor de sql 
    if (mysqli_query($conexion, $sql)) {
    } else {
    }
    


  //  $sql2 = "UPDATE usuarios' SET 
    //'nombre_organizacion'='$_POST[nombre_organizacion-5]','clave'='[value-6]' WHERE usuario = $usuario";


//update usuarios set clave= "1" where usuario = "20064705-k"