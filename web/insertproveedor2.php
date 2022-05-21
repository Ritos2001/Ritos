<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir proveedor:</h1>
                <FORM ACTION="insertproveedorcodigo2.php" METHOD="POST">
                        <label>Nombre:</label><br>
                        <INPUT TYPE="text" placeholder="Escriba el nombre" NAME="nombre"><br>
                        <label>Telefono:</label><br>
                        <INPUT TYPE="tel" placeholder="Escriba el telefono" NAME="telefono"><br>
                        <label>Email:</label><br>
                        <INPUT TYPE="email" placeholder="Escriba el email" NAME="email"><br>
                        <label>DNI:</label><br>
                        <INPUT TYPE="text" placeholder="Escriba el DNI" NAME="DNI"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="proveedor2.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
