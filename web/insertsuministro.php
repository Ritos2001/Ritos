<?php session_start();
if($_SESSION['rol']=="almacen"){?>
<?php include_once "cabezera.php"?>
<div  class="contenedor">
<div class="hijo">
<FORM ACTION="insertsuministro2.php" METHOD="POST">
                        <label>Escriba la cantidad de productos que quiera poner en la tabla:</label><br>
                        <INPUT TYPE="number" min="1" max="10000" NAME="tabla"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="almacen.php">Cancelar</a</button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

