<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$id_suministro=$_REQUEST['id_suministro'];
$ID_producto=$_REQUEST['ID_producto'];
$cantidad=$_REQUEST['cantidad'];
$consulta="call insertsuministro_producto ('".$id_suministro."','".$ID_producto."','".$cantidad."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: suministro_producto.php');
?>
<?php }else{
header('Location: error404.html');
}?>
