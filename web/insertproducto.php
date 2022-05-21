<?php session_start();
if($_SESSION['rol']=="vendedor"){?>
<?php include "cabezera.php"?>
<div  class="contenedor">
<div class="hijo">
		<h1>Añadir producto:</h1>
		<FORM ACTION="insertproductocodigo.php" METHOD="POST">
			<label>Nombre:</label><br>
			<INPUT TYPE="text" placeholder="Escriba el nombre" NAME="nombre"><br>
			<label>Precio:</label><br>
			<INPUT TYPE="number" min="1" max="10000" NAME="precio"><br>
			<label>Cantidad:</label><br>
			<INPUT TYPE="number" min="1" max="10000" NAME="cantidad"><br>
			<label>Vendible:</label><br>
			<select name="vendible">
                        <option>Vendible</option>
                        <option>No Vendible</option>
                	</select><br>
			<INPUT TYPE="submit" VALUE="Aceptar">
			<button><a href="vendedor.php">Cancelar</a</button>
		</FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
