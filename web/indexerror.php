<?php session_start();
if($_SESSION['rol']==session_id()){?>
<?php include_once "cabezera.php"?>
<div  class="contenedor">
<div class="hijo">
<h1>Panadería els Ritos</h1>
<p>Error en el usuario o contraseña</p>
<FORM ACTION="entrar.php" METHOD="POST">
<label>Ingrese su usuario y contraseña</label><br>
<label>Usuario:</label><br>
<INPUT TYPE="text" NAME="username"><br>
<label>Contraseña/Password:</label><br>
<INPUT TYPE="password" NAME="passwd"><br>
<button onclick=location.href="entrar.php">Entrar</button>
<button><a href="crear.php">Crear</a></button>
</FORM>
<span>¿Olvidó la </span><a href="recuperar2.php"> contraseña</a><span>?</span>
</div>
</div>
<?php include_once "pie.php"?>
<?php }else{
header('Location: error404.html');
}?>

