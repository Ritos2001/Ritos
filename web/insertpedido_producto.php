<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select id_producto from producto";
$consulta2="Select id_pedido from pedido";
?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir producto_pedido:</h1>
                <FORM ACTION="insertpedido_productocodigo.php" METHOD="POST">
                        <label>ID_pedido:</label><br>
                        <select name="ID_pedido">
                            <?php $resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                            <?php while ($columna2 = mysqli_fetch_array( $resultado2 )){?>
                                <option><?php echo $columna2['id_pedido'];?></option>
                            <?php } ?>
                        </select><br>
                        <label>ID_producto:</label><br>
                        <select name="ID_producto">
                            <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                            <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                                <option><?php echo $columna['id_producto'];?></option>
                            <?php } ?>
                        </select><br>
                        <label>Cantidad:</label><br>
                        <INPUT TYPE="number" min="1" max="100" value="<?php echo $columna['cantidad'];?>" NAME="cantidad"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="producto_pedido.php">Cancelar</a></button>
                        </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

