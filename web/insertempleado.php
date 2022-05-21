<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select id_usuario from usuario";
$resultado4=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir empleado:</h1>
                <FORM ACTION="insertempleadocodigo.php" METHOD="POST">
                        <label>Nombre:</label><br>
                        <INPUT TYPE="text" placeholder="Escribe tu nombre" NAME="nombre"><br>
                        <label>Apellidos:</label><br>
                        <INPUT TYPE="text" placeholder="Escribe tu apellidos" NAME="apellidos"><br>
                        <label>Telefono:</label><br>
                        <INPUT TYPE="text" placeholder="Escribe tu telefono" NAME="telefono"><br>
                        <label>DNI:</label><br>
                        <INPUT TYPE="text" placeholder="Escribe tu DNI" NAME="DNI"><br>
                        <label>ID_usuario</label><br>
                        <select name="ID_usuario">
                            <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                            <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                            <option><?php echo $columna['id_usuario'];?></option>
                        <?php } ?>
                        </select><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="empleado.php">Cancelar</a></button>
                </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

