<?php session_start();
if($_SESSION['rol']=="vendedor"){?>
<?php include_once "cabezera.php"?> 
<?php
include_once "bbdd.php";
$tabla=$_REQUEST['tabla'];
$cliente=$_REQUEST['cliente'];
$num=$tabla*2;
$precio2=0;
for($i=0;$i<$tabla;$i++){
$cod1=$_REQUEST[$i];
$cod2=$_REQUEST[$num];
$num=$num-1;
$consulta="call insert_pedido3 (12,'".$cod1."','".$cod2."','".$cliente."')";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
$consulta2="select precio from producto where nombre='".$cod1."'";
$resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");
$num4=$resultado2;
$precio=$cod2*$num4;
$precio2=$precio2+$precio;
}?>
<div class="contenedor">
<div class="hijo">
<p>El dinero total de su encargo es <?php echo $precio2?> euros.</p>
<button><a href="enhorabuena2.php">Comprar<button>
<button><a href="vendedor.php">Cancelar<button>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

