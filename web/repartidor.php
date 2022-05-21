<?php session_start();
if($_SESSION['rol']=="repartidor"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select id_pedido,producto,nombre,fecha_pedido,fecha_entrega,cantidad,estado from vista_cliente2";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<div class="contenedor">
<div class="hijo2">
<h1>Pedido</h1>
<table>
        <tr>
		<th>Producto</th>
                <th>nombre</th>
                <th>Fecha_pedido</th>
                <th>Fecha_entrega</th>
                <th>Cantidad</th>
                <th>Estado</th>
        </tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td><?php echo $columna['producto'];?></td>
                <td><?php echo $columna['nombre'];?></td>
                <td><?php echo $columna['fecha_pedido'];?></td>
                <td><?php echo $columna['fecha_entrega'];?></td>
                <td class="center"><?php echo $columna['cantidad'];?></td>
                <td><?php echo $columna['estado'];?></td>
                <td><button class="orange"><a href="<?php echo "updatepedido.php?cod=".$columna['id_pedido']?>">Modificar</button></td>
		<td><button style="background-color:grey"><a href="<?php echo "updatepedidofecha.php?cod=".$columna['id_pedido']?>">Modificar fecha</button></td>
        </tr>
        <?php } ?>
</table>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
