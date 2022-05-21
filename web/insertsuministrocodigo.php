<?php session_start();
if($_SESSION['rol']=="almacen"){?>
<?php
include_once "bbdd.php";
$tabla=$_REQUEST['tabla'];
$fecha=$_REQUEST['fecha'];
$num=$tabla*2;
$num2=$num*2;
for($i=0;$i<$tabla;$i++){
$cod1=$_REQUEST[$i];
$cod2=$_REQUEST[$num];
$cod3=$_REQUEST[$num2];
$num=$num-1;
$num2=$num2-1;
$consulta="call insert_suministro2 ('".$cod1."','".$cod3."','".$fecha."','".$cod2."')";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
};
header('Location: almacen.php');
?>
<?php }else{
header('Location: error404.html');
}?>
