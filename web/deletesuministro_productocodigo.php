<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include "bbdd.php";
$cod1=$_REQUEST["cod1"];
$cod2=$_REQUEST["cod2"];
$consulta="call deletesuministro_producto ('".$cod1."','".$cod2."');";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: suministro_producto.php');
?>
<?php }else{
header('Location: error404.html');
}?>
