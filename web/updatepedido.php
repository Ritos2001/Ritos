<?php session_start();
if($_SESSION['rol']=="repartidor"){?>
<?php include "cabezera.php"?>
<?php $cod=$_REQUEST["cod"]?>
<?php include "bbdd.php"?>
<?php $consulta="Select * from vista_pedido  where id_pedido='".$cod."'";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
$columna= mysqli_fetch_array( $resultado )
?>
<div class="contenedor">
<div class="hijo">
<div class="div">
<h1>Actualizar en el producto</h1>
        <FORM method="post" action="updatepedidocodigo.php">
                <INPUT type="hidden" value="<?php echo $columna['id_pedido'] ?>" name="cod"><br>
		<label>1.Ponga su usuario</label></br>
		<INPUT type="text" placeholder="Escriba el usuario" name="cambiar3"><br>
                <label>2.Estado</label><br>
                <select name="cambiar">
                        <option>Libre</option>
			<option>Ocupado</option>
                </select><br>
                <INPUT type="submit" VALUE="Aceptar">
                <button><a href="repartidor.php">Cancelar</a></button>
        </FORM>
</div>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
