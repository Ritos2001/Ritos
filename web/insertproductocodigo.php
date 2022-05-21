<?php session_start();
if($_SESSION['rol']=="vendedor"){?>
<?php
include_once "bbdd.php";
$nombre=$_REQUEST['nombre'];
$precio=$_REQUEST['precio'];
$cantidad=$_REQUEST['cantidad'];
$vendible=$_REQUEST['vendible'];
$consulta="call insertar_producto ('".$nombre."','".$precio."','".$cantidad."','".$vendible."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: vendedor.php');
?>
<?php }else{
header('Location: error404.html');
}?>
