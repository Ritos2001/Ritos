<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$ID_empleado=$_REQUEST['ID_empleado'];
$ID_usuario=$_REQUEST['ID_usuario'];
$fecha_pedido=$_REQUEST['fecha_pedido'];
$fecha_entrega=$_REQUEST['fecha_entrega'];
$estado=$_REQUEST['estado'];
$consulta="call insert_pedido ('".$ID_empleado."','".$ID_usuario."','".$fecha_pedido."','".$fecha_entrega."','".$estado."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: pedido.php');
?>
<?php }else{
header('Location: error404.html');
}?>
