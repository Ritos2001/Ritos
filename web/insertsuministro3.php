<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select ID_proveedor from proveedor";
?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir Suministro:</h1>
                <FORM ACTION="insertsuministrocodigo2.php" METHOD="POST">
                        <label>Fecha:</label><br>
                        <INPUT TYPE="date" NAME="fecha"><br>
                        <label>ID_proveedor:</label><br>
                        <select name="ID_proveedor">
                    	<?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                    	<?php while ($columna = mysqli_fetch_array( $resultado )){?>
                        	<option><?php echo $columna['ID_proveedor'];?></option>
                	<?php } ?>
                	</select><br>
			<INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="suministro.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
