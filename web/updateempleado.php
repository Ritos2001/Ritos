<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php $cod=$_REQUEST["cod"]?>
<?php include "bbdd.php"?>
<?php $consulta="Select * from empleado where ID_empleado='".$cod."'";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
$columna = mysqli_fetch_array( $resultado );
$consulta2="Select id_usuario from usuario";
$resultado4=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");
?>
<div  class="contenedor">
<div class="hijo">
<h1>Actualizar empleado</h1>
        <FORM method="post" action="updateempleadocodigo.php">
                <INPUT type="hidden" value="<?php echo $columna['ID_empleado'] ?>" name="cod"><br>
                <label>1.Nombre</label><br>
                <INPUT type="text" value="<?php echo $columna['nombre'] ?>" name="cambiar"><br>
                <label>2.Apellidos</label><br>
                <INPUT type="text" value="<?php echo $columna['apellidos'] ?>" name="cambiar2"><br>
                <label>3.Telefono</label><br>
                <INPUT type="text" value="<?php echo $columna['telefono'] ?>" name="cambiar3"><br>
                <label>4.DNI</label><br>
                <INPUT type="text" value="<?php echo $columna['DNI'] ?>" name="cambiar4"><br>
                <label>6.ID_usuario</label><br>
		<select name="cambiar5">
                    <?php $resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                    <?php while ($columna2 = mysqli_fetch_array( $resultado2 )){?>
                        <option><?php echo $columna2['id_usuario'];?></option>
                <?php } ?>
                </select><br>
                <INPUT type="submit" VALUE="Aceptar">
                <button><a href="empleado.php">Cancelar</a></button>
        </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
