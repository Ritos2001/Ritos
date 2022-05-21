<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<?php include_once "cabezera.php"?>
<div class="contenedor">
<div class="hijo">
<FORM ACTION="pedidocliente3.php" METHOD="POST">
<label>Ponga su nombre:</label><br>
<input type="text" name="nombre"><br>
<br><input type="submit" value="Aceptar">
<button><a href="cliente.php">Cancelar</a></button>
</form>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
