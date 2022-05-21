<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<?php include_once "cabezera.php"?>
<?php
include_once "bbdd.php";
$usuario=$_REQUEST['usuario'];
$direccion=$_REQUEST['direccion'];
$alias=$_REQUEST['alias'];
$consulta="call direccion ('".$usuario."','".$direccion."','".$alias."')";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
?>
<div class="contenedor">
<div class="hijo">
<p>Enhorabuena su dirrecion ya esta guardada ya puede hacer su pedido</p>
<button><a href="pedir_pedido.php">Hacer pedido</a></button>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
