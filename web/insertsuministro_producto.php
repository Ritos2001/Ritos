<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select id_producto from producto";
$consulta2="Select id_suministro from suministro";
?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir suministro_producto:</h1>
                <FORM ACTION="insertsuministro_productocodigo.php" METHOD="POST">
                        <label>Id_suministro:</label><br>
                        <select name="id_suministro">
                            <?php $resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                            <?php while ($columna2 = mysqli_fetch_array( $resultado2 )){?>
                                <option><?php echo $columna2['id_suministro'];?></option>
                            <?php } ?>
                        </select><br>
                        <label>Id_producto:</label><br>
                        <select name="ID_producto">
                            <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                            <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                                <option><?php echo $columna['id_producto'];?></option>
                            <?php } ?>
                        </select><br>
                        <label>Cantidad:</label><br>
                        <INPUT TYPE="number" min="1" max="100" NAME="cantidad"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="suministro_producto.php">Cancelar</a></button>
                        </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
