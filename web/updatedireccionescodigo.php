<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";?>
<?php
$cod=$_REQUEST["cod"];
$cam=$_REQUEST["cambiar"];
$cam2=$_REQUEST["cambiar2"];
$cam3=$_REQUEST["cambiar3"];
$consulta="call update_dirrecion ('".$cam."','".$cam2."','".$cam3."','".$cod."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
header('Location: direcciones.php');
?>
<?php }else{
header('Location: error404.html');
}?>
