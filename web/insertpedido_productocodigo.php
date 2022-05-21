<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$id_pedido=$_REQUEST['ID_pedido'];
$ID_producto=$_REQUEST['ID_producto'];
$cantidad=$_REQUEST['cantidad'];
$consulta="call insertpedido_producto ('".$id_pedido."','".$ID_producto."','".$cantidad."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: producto_pedido.php');
?>
<?php }else{
header('Location: error404.html');
}?>
