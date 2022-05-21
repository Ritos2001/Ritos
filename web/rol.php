<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from rol";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<div class="contenedor">
<div class="hijo">
<h1>Rol</h1>
<button onclick=location.href="proveedor2.php">Proveedor</button>
<button onclick=location.href="suministro.php">Suministro</button>
<button onclick=location.href="producto.php">Producto</button>
<button onclick=location.href="pedido.php">Pedido</button>
<button onclick=location.href="direcciones.php">Direcciones</button>
<button onclick=location.href="usuario.php">Usuario</button>
<button onclick=location.href="empleado.php">Empleado</button>
<button onclick=location.href="producto_pedido.php">Producto_pedido</button>
<button onclick=location.href="suministro_producto.php">Suministro_producto</button><br><br>
<table>
<button class="green" onclick=location.href="insertrol.php">+Nuevo</button>
        <tr>
                <th>Id_rol</th>
                <th>Nombre</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td class="center"><?php echo $columna['ID_rol'];?></td>
                <td class="center"><?php echo $columna['nombre'];?></td>
                <td><button class="orange"><a href="<?php echo "updaterol.php?cod=".$columna['ID_rol']?>">Modificar</button></td>
                <td><button class="red"><a href="<?php echo "deleterol.php?cod=".$columna['ID_rol']?>">Borrar</button></td>
        </tr>
        <?php } ?>
</table>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
