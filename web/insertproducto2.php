<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";
?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir empleado:</h1>
                <FORM ACTION="insertproductocodigo2.php" METHOD="POST">
                        <label>Nombre:</label>
                        <INPUT TYPE="text" placeholder="Escribe tu nombre" NAME="nombre"><br>
                        <label>Precio:</label>
                        <INPUT TYPE="number" min="1.00" max="1000.00" NAME="precio"><br>
                        <label>Vendible:</label>
                        <select name="vendible">
                        <option>Vendible</option>
                        <option>No Vendible</option>
                        </select><br>
                        <label>Cantidad:</label>
                        <INPUT TYPE="number" min="1" max="1000" NAME="cantidad"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="producto.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
