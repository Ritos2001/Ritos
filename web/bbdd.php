<?php
$usuario="root";
$servidor="127.0.0.1:3307";
$pass="1234";
$basedatos="Ritos";

$conexion = mysqli_connect($servidor,$usuario,$pass) or die ("No se ha podido conectar a la base de datos");

$db=mysqli_select_db($conexion,$basedatos) or die ("Ups! Pues va a ver que no se ha podido conectar a la base de datos");
?>
