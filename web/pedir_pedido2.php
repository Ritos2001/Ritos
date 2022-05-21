<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<?php include_once "cabezera.php"?>
<?php include_once "bbdd.php";
$tabla=$_REQUEST['tabla'];
$consulta="Select nombre from producto";?>
<div class="contenedor">
<div class="hijo">
<button><a href="pedir_pedido.php">Elegir tabla</a</button>
<button><a href="pedidocliente2.php">Ver pedido</a></button>
<button><a href="pedidocliente.php">Catalogo de Productos</a></button>
<button><a href="contacto.php">Contactanos</a></button>
<FORM ACTION="pedir_pedidocodigo.php" METHOD="POST">
<p>Para hacer un pedido ingrese su dirrecion si no lo ha hecho pulse el boton de abajo</p>
<button><a href="dirrecion2.php">Poner dirrecion</a></button>
<table>
    <tr>
        <td>Producto</td>
        <td>Cantidad</td>
    </tr>
    <?php $num=$tabla*2; ?>
    <?php for($i=0;$i<$tabla;$i++){?>
    <tr>
    <td><select name=<?php echo $i;?>>
        <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
        <option><?php echo $columna['nombre'];?></option>
        <?php } ?>
        </select></td>
        <td><input type="number" min="1" max="100" name=<?php echo $num;?>></td>
        <?php $num=$num-1;?>
    <?php } ?>
    <table>
<label>Meta su nombre de cliente:</label><br>
<input type="text" name="cliente"><br>
<input type="hidden" value=<?php echo $tabla;?> name="tabla"><br>
<input type="hidden" value=<?php echo $num2;?> name="num2"><br>
<INPUT TYPE="submit" VALUE="Aceptar">
<button><a href="cliente.php">Cancelar</a></button>
</FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
