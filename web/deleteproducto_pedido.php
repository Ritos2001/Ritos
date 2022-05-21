<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include "bbdd.php"?>
<?php $consulta="Select id_producto from producto";
$consulta2="Select id_pedido from pedido";
?>
<div  class="contenedor">
<div class="hijo">
<h1>Borrar producto_pedido</h1>
        <FORM method="post" action="deleteproducto_pedidocodigo.php">
                <label>1.Id_pedido</label><br>
                <select name="cod1">
		    <?php $resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                    <?php while ($columna2 = mysqli_fetch_array( $resultado2 )){?>
                        <option><?php echo $columna2['id_pedido'];?></option>
                    <?php } ?>
                </select><br>
                <label>2.Id_producto</label><br>
                <select name="cod2">
                    <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                    <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                        <option><?php echo $columna['id_producto'];?></option>
                    <?php } ?>
                </select><br>
                <INPUT type="submit" value="Aceptar">
                <button><a href="producto_pedido.php">Cancelar</a></button>
        </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

