<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$nombre=$_REQUEST['nombre'];
$consulta="Select * from vista_cliente where nombre='".$nombre."'";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
$columna2=mysqli_fetch_array($resultado)?>

<div class="contenedor">
<div class="hijo">
<?php if($columna2['producto']==null){?>
<p>Su usuario no tiene ningún pedido hecho, vaya a hacer uno.</p>
<button><a href="pedir_pedido.php">Hacer pedido</a></button>
<?php }else{ ?>
<h1>Pedido</h1>
<table>
        <tr>
                <th>Producto</th>
                <th>Fecha_pedido</th>
                <th>Fecha_entrega</th>
                <th>Cantidad</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td><?php echo $columna['producto'];?></td>
                <td><?php echo $columna['fecha_pedido'];?></td>
                <td><?php echo $columna['fecha_entrega'];?></td>
                <td class="center"><?php echo $columna['cantidad'];?></td>
        </tr>
        <?php } ?>
</table>
</div>
</div>
<?php include_once "pie.php"?>
<?php }?>
<?php }else{
header('Location: error404.html');
}?>

