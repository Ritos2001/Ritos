<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$nombre=$_REQUEST['nombre'];
$consulta="call insert_rol ('".$nombre."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: rol.php');
?>
<?php }else{
header('Location: error404.html');
}?>

