<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from proveedor";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<h1>Proveedor</h1>
<button onclick=location.href="empleado.php">Empleado</button>
<button onclick=location.href="suministro.php">Suministro</button>
<button onclick=location.href="producto.php">Producto</button>
<button onclick=location.href="pedido.php">Pedido</button>
<button onclick=location.href="rol.php">Rol</button>
<button onclick=location.href="direcciones.php">Direcciones</button>
<button onclick=location.href="usuario.php">Usuario</button>
<button onclick=location.href="producto_pedido.php">Producto_pedido</button>
<button onclick=location.href="suministro_producto.php">Suministro_producto</button><br><br>
<table>
<button class="green" onclick=location.href="insertproveedor2.php">+Nuevo</button>
        <tr>
		<th>Id_proveedor</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>DNI</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td class="center"><?php echo $columna['ID_proveedor'];?></td>
		<td><?php echo $columna['nombre'];?></td>
                <td><?php echo $columna['telefono'];?></td>
                <td><?php echo $columna['Email'];?></td>
                <td><?php echo $columna['DNI'];?></td>
                <td><button class="orange"><a href="<?php echo "updateproveedor2.php?cod=".$columna['ID_proveedor']?>">Modificar</button></td>
                <td><button class="red"><a href="<?php echo "deleteproveedor2.php?cod=".$columna['ID_proveedor']?>">Borrar</button></td>
        </tr>
        <?php } ?>
</table>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

