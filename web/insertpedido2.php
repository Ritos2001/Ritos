<?php session_start();
if($_SESSION['rol']=="vendedor"){?>
<?php include_once "cabezera.php"?>
<div  class="contenedor">
<div class="hijo">
<FORM ACTION="insertpedido3.php" METHOD="POST">
                        <label>¿Cuantos productos quieres comprar?</label><br>
                        <INPUT TYPE="number" min="1" max="10000" NAME="tabla"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="vendedor.php">Cancelar</a</button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
