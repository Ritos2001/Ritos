<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select id_usuario from usuario";
$resultado4=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir pedido:</h1>
                <FORM ACTION="insertdireccionescodigo.php" METHOD="POST">
                        <label>Id_usuario:</label><br>
                        <select name="ID_usuario">
                            <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                            <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                                <option><?php echo $columna['id_usuario'];?></option>
			<?php } ?>
                        </select><br>
                        <label>Dirrecion:</label><br>
                        <INPUT TYPE="text" NAME="dirrecion" placeholder="Escribe tu dirrecion"><br>
                        <label>Alias:</label><br>
                        <select name="alias">
                            <option>casa</option>
                            <option>empresa</option>
                        </select><br>
                        <INPUT type="submit" VALUE="Aceptar">
                        <button><a href="direcciones.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
