<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from producto";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<div class="contenedor">
<div class="hijo2">
<h1>Producto</h1>
<button onclick=location.href="proveedor2.php">Proveedor</button>
<button onclick=location.href="suministro.php">Suministro</button>
<button onclick=location.href="empleado.php">Empleado</button>
<button onclick=location.href="pedido.php">Pedido</button>
<button onclick=location.href="rol.php">Rol</button>
<button onclick=location.href="direcciones.php">Direcciones</button>
<button onclick=location.href="usuario.php">Usuario</button>
<button onclick=location.href="producto_pedido.php">Producto_pedido</button>
<button onclick=location.href="suministro_producto.php">suministro_producto</button><br><br>
<table>
<button class="green" onclick=location.href="insertproducto2.php">+Nuevo</button>
        <tr>
                <th>ID_producto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Vendible</th>
                <th>Cantidad</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
            <td class="center"><?php echo $columna['ID_producto'];?></td>
            <td class="center"><?php echo $columna['nombre'];?></td>
            <td class="center"><?php echo $columna['Precio'];?></td>
             <td class="center"><?php echo $columna['vendible'];?></td>
	    <td class="center"><?php echo $columna['cantidad'];?></td>
            <td><button class="orange" ><a href="<?php echo "updateproducto2.php?cod=".$columna['ID_producto']?>">Modificar</button></td>
            <td><button class="red"><a href="<?php echo "deleteproducto2.php?cod=".$columna['ID_producto']?>">Borrar</button></td>
        </tr>
        <?php } ?>
</table>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

