<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<?php include_once "cabezera.php"?> 
<?php include_once "bbdd.php";
$tabla=$_REQUEST['tabla'];
$consulta="Select nombre from producto";?>
<FORM ACTION="insertpedidocodigo2.php" METHOD="POST">
<table>
    <tr>
        <td>Producto</td>
        <td>Cantidad</td>
    </tr>
    <?php $num=$tabla*2; ?>
    <?php for($i=0;$i<$tabla;$i++){?>
    <tr>
    <td><select name=<?php echo $num;?>>
        <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
        <option><?php echo $columna['nombre'];?></option>
        <?php } ?>
        </select></td>
        <td><input type="number" min="1" max="100" name=<?php echo $num;?>></td>
        <?php $num=$num-1;?>
    <?php } ?>
    <table>
<input type="hidden" value=<?php echo $tabla;?> name="tabla"><br>
<input type="hidden" value=<?php echo $num2;?> name="num2"><br>
<?php $num2=rand(1,2); ?>
<INPUT TYPE="submit" VALUE="aceptar">
<button><a href="vendedor.php">Cancelar</a</button>
<button><a href="insertpedido2.php">Elegir tabla</a</button>
</FORM>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
