<?php session_start();?>
<?php if($_SESSION['rol']==session_id()){?>
<?php include "cabezera.php"?>
<div class="contenedor">
<div class="hijo">
    <h1>Crear usuario</h1>
        <FORM ACTION="crearcodigo.php" METHOD="POST">
	    <p>La contraseña y la de confirmación no son iguales.</p>
            <label>Nombre:</label>
            <INPUT TYPE="text" NAME="nombre" placeholder="Escriba el nombre"><br>
            <label>Usuario:</label>
            <INPUT TYPE="text" NAME="usuario" placeholder="Escriba el usuario"><br>
            <label>Contraseña:</label>
            <INPUT TYPE="password" NAME="contraseña" placeholder="Escriba la contraseña"><br>
            <label>Confirmar contraseña:</label>
            <INPUT TYPE="password" NAME="contraseña2" placeholder="Escriba la confirmacion de la contraseña"><br>
            <label>Email:</label>
            <INPUT TYPE="text" NAME="email" placeholder="Escriba el email"><br>
            <INPUT TYPE="submit" VALUE="Aceptar">
            <button><a href="index.php">Cancelar</a></button>
        </FORM>
</div>
</div>
<?php include "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

