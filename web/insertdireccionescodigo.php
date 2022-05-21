<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php
include_once "bbdd.php";
$ID_usuario=$_REQUEST['ID_usuario'];
$dirrecion=$_REQUEST['dirrecion'];
$alias=$_REQUEST['alias'];
$consulta="call insert_dirrecion ('".$ID_usuario."','".$dirrecion."','".$alias."')";
mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
mysqli_close($db);
header('Location: direcciones.php');
?><?php }else{
header('Location: error404.html');
}?>


