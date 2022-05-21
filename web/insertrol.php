<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir rol:</h1>
                <FORM ACTION="insertrolcodigo.php" METHOD="POST">
                        <label>Nombre:</label><br>
                        <INPUT TYPE="text" placeholder="Escribe tu nombre" NAME="nombre"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="usuario.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
