<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from empleado";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<h1>Empleado</h1>
<button onclick=location.href="proveedor2.php">Proveedor</button>
<button onclick=location.href="suministro.php">Suministro</button>
<button onclick=location.href="producto.php">Producto</button>
<button onclick=location.href="pedido.php">Pedido</button>
<button onclick=location.href="rol.php">Rol</button>
<button onclick=location.href="direcciones.php">Direcciones</button>
<button onclick=location.href="usuario.php">Usuario</button>
<button onclick=location.href="producto_pedido.php">Producto_pedido</button>
<button onclick=location.href="suministro_producto.php">Suministro_producto</button><br><br>
<table>
<button class="green" onclick=location.href="insertempleado.php">+Nuevo</button>
        <tr>
                <th>ID_empleado</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>DNI</th>
                <th>ID_usuario</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td class="center"><?php echo $columna['ID_empleado'];?></td>
                <td><?php echo $columna['nombre'];?></td>
                <td><?php echo $columna['apellidos'];?></td>
                <td><?php echo $columna['telefono'];?></td>
                <td><?php echo $columna['DNI'];?></td>
                <td class="center"><?php echo $columna['ID_usuario'];?></td>
                <td><button class="orange"><a href="<?php echo "updateempleado.php?cod=".$columna['ID_empleado']?>">Modificar</button></td>
                <td><button class="red"><a href="<?php echo "deleteempleado.php?cod=".$columna['ID_empleado']?>">Borrar</button></td>
        </tr>
        <?php } ?>
</table>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
