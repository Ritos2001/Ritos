<?php session_start();
if($_SESSION['rol']=="vendedor"){?>
<?php include_once "cabezera.php"?>
<div  class="contenedor">
<div class="hijo">
<p>Enhorabuena por realizar su compra</p>
<button><a href="vendedor.php">Volver a pagina vendedor</a></button>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

