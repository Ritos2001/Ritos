<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<?php include_once "cabezera.php"?>
<div class="contenedor">
<div class="hijo">
<FORM ACTION="dirrecion3.php" METHOD="POST"><br>
<label>Ponga su usuario</label><br>
<input type="text" name="usuario"></input><br>
<label>Ponga su dirrecion</label><br>
<input type="text" name="direccion"></input><br>
<label>Ponga si es su casa o empresa</label><br>
<select name="alias">
	<option>Casa</option>
	<option>Empresa</option>
</select><br>
<INPUT TYPE="submit" VALUE="Aceptar">
</FORM>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
