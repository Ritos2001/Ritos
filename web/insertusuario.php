<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php include_once "bbdd.php";
$consulta="Select id_rol from rol";
$resultado4=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
?>
<div  class="contenedor">
<div class="hijo">
                <h1>Añadir usuario:</h1>
                <FORM ACTION="insertusuariocodigo.php" METHOD="POST">
                        <label>Id_rol:</label><br>
                        <select name="ID_rol">
                        <?php $resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                        <?php while ($columna = mysqli_fetch_array( $resultado )){?>
                            <option><?php echo $columna['id_rol'];?></option>
			<?php } ?>
                        </select><br>
                        <label>Nombre:</label><br>
                        <INPUT TYPE="text" placeholder="Escriba el nombre" NAME="nombre"><br>
                        <label>Username:</label><br>
                        <INPUT TYPE="text" placeholder="Escriba el usuario" NAME="username"><br>
                        <label>Passwd:</label><br>
                        <INPUT TYPE="password" placeholder="Escriba la contraseña" NAME="passwd"><br>
                        <INPUT TYPE="submit" VALUE="Aceptar">
                        <button><a href="usuario.php">Cancelar</a></button>
                </FORM>
                </div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

