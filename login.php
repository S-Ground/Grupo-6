<?php
require 'database.php';


?>


<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
    <title>session</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>


<body>

    <h1>Iniciar sesión</h1>

    <form action="login.php" method="post"></form>
    <input type="text" name="rut" placeholder="Ingrese su rut">
    <input type="password" name="password" placeholder="Ingrese su contraseña">
    <input type="submit" value="Enviar">


</body>
</html>