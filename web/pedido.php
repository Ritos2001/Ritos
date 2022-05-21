<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from pedido";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<h1>Pedido</h1>
<button onclick=location.href="proveedor2.php">Proveedor</button>
<button onclick=location.href="suministro.php">Suministro</button>
<button onclick=location.href="producto.php">Producto</button>
<button onclick=location.href="empleado.php">Empleado</button>
<button onclick=location.href="rol.php">Rol</button>
<button onclick=location.href="direcciones.php">Direcciones</button>
<button onclick=location.href="usuario.php">Usuario</button>
<button onclick=location.href="producto_pedido.php">Producto_pedido</button>
<button onclick=location.href="suministro_producto.php">Suministro_producto</button><br><br>
<table>
<button class="green" onclick=location.href="insertpedido.php">+Nuevo</button>
        <tr>
                <th>Id_pedido</th>
                <th>Id_empleado</th>
                <th>Id_usuario</th>
                <th>Fecha_pedido</th>
                <th>Fecha_entrega</th>
                <th>Estado</th>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
        <tr>
		<td><?php echo $columna['ID_pedido'];?></td>
                <td><?php echo $columna['ID_repartidor'];?></td>
                <td><?php echo $columna['ID_usuario'];?></td>
                <td><?php echo $columna['fecha_pedido'];?></td>
                <td><?php echo $columna['fecha_entrega'];?></td>
                <td><?php echo $columna['estado'];?></td>
                <td><button class="orange"><a href="<?php echo "updatepedido2.php?cod=".$columna['ID_pedido']?>">Modificar</button></td>
                <td><button style="background-color:grey"><a href="<?php echo "updatepedidofecha2.php?cod=".$columna['ID_pedido']?>">Modificar fecha</button></td>
		<td><button class="red"><a href="<?php echo "deletepedido.php?cod=".$columna['ID_pedido']?>">Borrar</button></td>
        </tr>
        <?php } ?>
</table>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
