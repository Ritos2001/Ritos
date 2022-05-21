<?php session_start();
if($_SESSION['rol']=="almacen"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from vista_suministro";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<div class="contenedor">
<div class="hijo2">
<div class="div">
<h1>Suministro</h1>
<button onclick=location.href="proveedor.php">Proveedor</button><br><br>
<table>
<button class="green" onclick=location.href="insertsuministro.php">+Nuevo</button>
        <tr>
                <th>Nombre</th>
                <th>Proveedor</th>
                <th>Fecha</th>
		<th>Fecha_entrega</th>
		<th>Cantidad</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td><?php echo $columna['nombre'];?></td>
                <td><?php echo $columna['proveedor'];?></td>
		<td><?php echo $columna['fecha'];?></td>
		<td><?php echo $columna['fecha_entrega'];?></td>
                <td class="center"><?php echo $columna['cantidad'];?></td>
                <td><button class="orange"><a href="<?php echo "updatesuministro.php?cod=".$columna['ID_suministro']?>">Modificar</button></td>
		<td><button style="background-color:grey"><a href="<?php echo "updatesuministrofecha.php?cod=".$columna['ID_suministro']?>">Modificar fecha</button></td>
        </tr>
        <?php } ?>
</table>
</div>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
