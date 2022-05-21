<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$nombre=$_REQUEST['nombre'];
$telefono=$_REQUEST['telefono'];
$email=$_REQUEST['email'];
$DNI=$_REQUEST['DNI'];
$consulta="call insert_proveedor ('".$nombre."','".$telefono."','".$email."','".$DNI."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: proveedor2.php');
?>
<?php }else{
header('Location: error404.html');
}?>
