<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from suministro_producto";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<div class="contenedor">
<div class="hijo">
<h1>Suministro_producto</h1>
<button onclick=location.href="proveedor2.php">Proveedor</button>
<button onclick=location.href="suministro.php">Suministro</button>
<button onclick=location.href="producto.php">Producto</button>
<button onclick=location.href="empleado.php">Empleado</button>
<button onclick=location.href="rol.php">Rol</button>
<button onclick=location.href="direcciones.php">Direcciones</button>
<button onclick=location.href="usuario.php">Usuario</button>
<button onclick=location.href="pedido.php">Pedido</button>
<button onclick=location.href="producto_pedido.php">Producto_pedido</button><br><br>

<button class="green" onclick=location.href="insertsuministro_producto.php">+Nuevo</button>
<button class="orange" onclick=location.href="updatesuministro_producto.php">Modificar</button>
<button class="red" onclick=location.href="deletesuministro_producto.php">Borrar</button>
<table>
        <tr>
                <th>Id_suministro</th>
                <th>Id_producto</th>
                <th>Cantidad</th>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
        <tr>
                <td class="center"><?php echo $columna['ID_suministro'];?></td>
                <td class="center"><?php echo $columna['ID_producto'];?></td>
                <td class="center"><?php echo $columna['cantidad'];?></td>
        </tr>
        <?php } ?>
</table>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
