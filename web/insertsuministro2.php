<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$tabla=$_REQUEST['tabla'];
$consulta="Select nombre from proveedor";
$consulta2="Select nombre from producto";
?>
<?php session_start();
if($_SESSION['rol']=="almacen"){?>
<div  class="contenedor">
<div class="hijo">
<FORM ACTION="insertsuministrocodigo.php" METHOD="POST">
<label>Fecha:</label><br>
<input type="date" name="fecha"><br>
<table>
    <tr>
        <td>Proveedor</td>
        <td>Producto</td>
        <td>Cantidad</td>
    </tr>
    <?php $num=$tabla*2;?>
    <?php $num2=$num*2;?>
    <?php for($i=0;$i<$tabla;$i++){?>
    <tr>
        <td><select name=<?php echo $num2;?>>
	<?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
	<?php while ($columna = mysqli_fetch_array( $resultado )){?>
	<option><?php echo $columna['nombre'];?></option>
	<?php } ?>
	</select></td>
	<td><select name=<?php echo $i;?>>
	<?php $resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos"); ?>
	<?php while ($columna2 = mysqli_fetch_array( $resultado2 )){?>
        <option><?php echo $columna2['nombre'];?></option>
        <?php } ?>
        </select></td>
        <td><input type="number" min="1" max="100" name=<?php echo $num;?>></td>
        <?php $num=$num-1; ?>
        <?php $num2=$num2-1; ?>
    <?php } ?>
	</tr>
    </table>
<input type="hidden" value=<?php echo $tabla;?> name="tabla"><br>
<INPUT TYPE="submit" VALUE="Aceptar">
<button><a href="almacen.php">Cancelar</a</button>
<button><a href="insertsuministro.php">Elegir tabla</a</button>
</FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

