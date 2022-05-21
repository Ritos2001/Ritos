<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select * from empleado";
$consulta2="Select * from usuario";
?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir pedido:</h1>
                <FORM ACTION="insertpedidocodigo.php" METHOD="POST">
                        <label>ID_empleado:</label><br>
			<select name="ID_empleado">
                    	<?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                    	<?php while ($columna = mysqli_fetch_array( $resultado )){?>
                        	<option><?php echo $columna['ID_empleado'];?></option>
			<?php } ?>
                	</select><br>
                        <label>ID_usuario:</label><br>
			<select name="ID_usuario">
                        <?php $resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                        <?php while ($columna2 = mysqli_fetch_array( $resultado2 )){?>
                                <option><?php echo $columna2['ID_usuario'];?></option>
			<?php } ?>
                        </select><br>
                        <label>Fecha_pedido:</label><br>
                        <INPUT TYPE="date" NAME="fecha_pedido"><br>
                        <label>Fecha_entrega:</label><br>
                        <INPUT TYPE="date" NAME="fecha_entrega"><br>
                        <label>Estado:</label><br>
                        <select name="estado">
			<option>Libre</option>
			<option>Ocupado</option>
			</select><br>
			<INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="pedido.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
