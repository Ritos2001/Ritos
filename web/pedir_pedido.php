<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<?php include_once "cabezera.php"?>
<div class="contenedor">
<div class="hijo">
<FORM ACTION="pedir_pedido2.php" METHOD="POST">
                        <label>¿Cuántos productos quiere comprar?</label><br>
                        <INPUT TYPE="number" min="1" max="10000" NAME="tabla"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="cliente.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

