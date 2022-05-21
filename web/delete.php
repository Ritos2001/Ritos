<?php session_start();
if($_SESSION['rol']=="vendedor"){?>
<?php
include "bbdd.php";
$cod=$_REQUEST["cod"];
$consulta="call delete_producto ('".$cod."');";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: vendedor.php');
?>
<?php }else{
header('Location: error404.html');
}?>
