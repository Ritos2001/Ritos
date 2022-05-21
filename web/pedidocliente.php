<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from vista_producto";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<div class="contenedor">
<div class="hijo">
<h1>Productos</h1>
<button><a href="cliente.php">Home</a></button>
<button><a href="pedidocliente2.php">Ver pedidos</a></button>
<button><a href="pedir_pedido.php">Hacer pedido</a></button>
<button><a href="contacto.php">Contactanos</a></button>

<table>
        <tr>
                <th>Nombre</th>
		<th>Precio</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td><?php echo $columna['nombre'];?></td>
		<td><?php echo $columna['precio'];?></td>
        </tr>
        <?php } ?>
</table>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
