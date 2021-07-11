<?php
include "datosConexion.php";
//Conexion a base de datos a travez de PDO 
  function Conectar($db)
  {
      try {
          //Obtenemos los datos a travez de la clase "datosConexion.php" y los entregamos la sentencia
          $conexion = new PDO("mysql:host={$db['servidor']};dbname={$db['db']};charset=utf8", $db['usuario'], $db['password']);  
          //Si existe algun error generado por PDO el script lanza un error y deja de ejecutarse
          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $conexion;
          //si PDO catura un error lo alamcena en la variable e para luego mostrar un mensaje y terminar el script
      } catch (PDOException $e) {
          exit($e->getMessage());
      }
  }