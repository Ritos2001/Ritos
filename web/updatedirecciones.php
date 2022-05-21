<?php session_start();
if($_SESSION['rol']=="mantenimiento"){?>
<?php include "cabezera.php"?>
<?php $cod=$_REQUEST["cod"]?>
<?php include "bbdd.php"?>
<?php $consulta="Select * from direcciones where id_usuario='".$cod."'";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
$columna = mysqli_fetch_array( $resultado );
$consulta2="Select id_usuario from usuario";
$resultado4=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");
?>
<div  class="contenedor">
<div class="hijo">
<h1>Actualizar las dirreciones</h1>
        <FORM method="post" action="updatedireccionescodigo.php">
                <INPUT type="hidden" value="<?php echo $columna['id_usuario'] ?>" name="cod"><br>
                <label>1.Id_usuario</label><br>
                <select name="cambiar">
                    <?php $resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos");?>
                    <?php while ($columna2 = mysqli_fetch_array( $resultado2 )){?>
                        <option><?php echo $columna2['id_usuario'];?></option>
                <?php } ?>
                </select><BR>
                <label>2.Direccion</label><br>
                <INPUT type="text" value="<?php echo $columna['direccion'] ?>" name="cambiar2"><br>
                <label>3.Alias</label><br>
                <select name="cambiar3">
                        <option>Casa</option>
                        <option>Empresa</option>
                </select><br>
                <INPUT type="submit" VALUE="Aceptar">
                <button><a href="dirreciones.php">Cancelar</a></button>
        </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>
