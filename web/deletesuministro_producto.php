<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include "bbdd.php"?>
<?php $consulta="Select id_producto from producto";
$resultado4=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
$consulta2="Select id_suministro from suministro";
$resultado3=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");
?>
<div class="contenedor">
<div class="hijo">
<h1>Borrar suministro_producto:</h1>
        <FORM method="post" action="deletesuministro_productocodigo.php">
                <label>1.Id_suministro</label><br>
		<select name="cod2">
                    <?php $resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                    <?php while ($columna2 = mysqli_fetch_array( $resultado2 )){?>
                        <option><?php echo $columna2['id_suministro'];?></option>
                <?php } ?>
                </select><br>
                <label>2.Id_producto</label><br>
                <select name="cod1">
                    <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                    <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                        <option><?php echo $columna['id_producto'];?></option>
		<?php } ?>
                </select><br>
                <INPUT type="submit" value="Aceptar">
                <button><a href="suministro_producto.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

