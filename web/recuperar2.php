<?php session_start();?>
<?php if($_SESSION['rol']==session_id()){?>
<?php include "cabezera.php"?>
<div class="contenedor">
<div class="hijo">
<label>Por favor ingrese su correo:</label><br>
<INPUT type="email" placeholder="Escribe tu email"><br>
<button><a href="recucorreo.php">Aceptar</a></button>
<button><a href="index.php">Cancelar</a></button>
</div>
</div>
<?php  include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
