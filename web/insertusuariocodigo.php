<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$ID_rol=$_REQUEST['ID_rol'];
$nombre=$_REQUEST['nombre'];
$username=$_REQUEST['username'];
$passwd=$_REQUEST['passwd'];
$consulta="call insert_usuario ('".$ID_rol."','".$nombre."','".$username."','".$passwd."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: usuario.php');
?>
<?php }else{
header('Location: error404.html');
}?>

