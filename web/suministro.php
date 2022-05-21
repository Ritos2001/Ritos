<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from suministro";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<div class="contenedor">
<div class="hijo2">
<h1>Suministro</h1>
<button onclick=location.href="proveedor2.php">Proveedor</button>
<button onclick=location.href="empleado.php">Empleado</button>
<button onclick=location.href="producto.php">Producto</button>
<button onclick=location.href="pedido.php"Pedido</button>
<button onclick=location.href="rol.php">Rol</button>
<button onclick=location.href="direcciones.php">Direcciones</button>
<button onclick=location.href="usuario.php">Usuario</button>
<button onclick=location.href="producto_pedido.php">Producto_pedido</button>
<button onclick=location.href="suministro_producto.php">Suministro_producto</button><br><br>
<table>

<button class="green" onclick=location.href="insertsuministro3.php">+Nuevo</button>
        <tr>
                <th>ID_suministro</th>
                <th>Fecha</th>
		<th>Fecha_entrega</th>
                <th>ID_proveedor</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td class="center"><?php echo $columna['ID_suministro'];?></td>
                <td class="center"><?php echo $columna['fecha'];?></td>
		<td class="center"><?php echo $columna['fecha_entrega'];?></td>
                <td class="center"><?php echo $columna['ID_proveedor'];?></td>
                <td><button class="orange"><a href="<?php echo "updatesuministro2.php?cod=".$columna['ID_suministro']?>">Modificar</button></td>
		<td><button style="background-color:grey"><a href="<?php echo "updatesuministrofecha2.php?cod=".$columna['ID_suministro']?>">Modificar fecha</button></td>
		<td><button class="red"><a href="<?php echo "deletesuministro2.php?cod=".$columna['ID_suministro']?>">Borrar</button></td>

        </tr>
        <?php } ?>
</table>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

