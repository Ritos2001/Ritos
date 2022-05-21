<?php session_start();
if($_SESSION['rol']=="almacen"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select ID_proveedor,nombre,telefono,Email,DNI from proveedor";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
<div class="contenedor">
<div class="hijo2">
<h1>Proveedor</h1>
<button onclick=location.href="almacen.php">Suministro</button><br><br>
<table>
<button class="green" onclick=location.href="insertproveedor.php">+Nuevo</button>
        <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>DNI</th>
        <tr>
        <tr>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                <td><?php echo $columna['nombre'];?></td>
                <td><?php echo $columna['telefono'];?></td>
                <td class="center"><?php echo $columna['Email'];?></td>
                <td><?php echo $columna['DNI'];?></td>
                <td><button class="orange"><a href="<?php echo "updateproveedor.php?cod=".$columna['ID_proveedor']?>">Modificar</button></td>
                <td><button class="red"><a href="<?php echo "deleteproveedor.php?cod=".$columna['ID_proveedor']?>">Borrar</button></td>
        </tr>
        <?php } ?>
</table>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
