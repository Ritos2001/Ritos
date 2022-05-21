<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$fecha=$_REQUEST['fecha'];
$ID_proveedor=$_REQUEST['ID_proveedor'];
$consulta="call insert_suministro3 ('".$fecha."','".$ID_proveedor."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: suministro.php');
?>
<?php }else{
header('Location: error404.html');
}?>
