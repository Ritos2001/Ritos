<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$nombre=$_REQUEST['nombre'];
$apellidos=$_REQUEST['apellidos'];
$telefono=$_REQUEST['telefono'];
$DNI=$_REQUEST['DNI'];
$ID_usuario=$_REQUEST['ID_usuario'];
$consulta="call insert_empleado ('".$nombre."','".$apellidos."','".$telefono."','".$DNI."','".$ID_usuario."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: empleado.php');
?>
<?php }else{
header('Location: error404.html');
}?>
