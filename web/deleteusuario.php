<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include "bbdd.php";
$cod=$_REQUEST["cod"];
$consulta="call delete_usuario ('".$cod."');";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: usuario.php');
?>
<?php }else{
header('Location: error404.html');
}?>

