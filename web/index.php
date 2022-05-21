<?php session_start();?>
<?php $_SESSION['rol']=session_id() ?>
<?php include_once "cabezera.php"?>
<div class="contenedor">
<div class="hijo">
<div class="div">
<h1>Panadería els Ritos</h1>
<FORM ACTION="entrar.php" METHOD="POST">
<label>Ingrese su usuario y contraseña</label><br>
<label>Usuario:</label><br>
<INPUT TYPE="text" NAME="username" placeholder="Escribe tu nombre de usuario"><br>
<label>Contraseña/Password:</label><br>
<INPUT TYPE="password" NAME="passwd" placeholder="Escribe tu contraseña"><br>
<button onclick=location.href="entrar.php">Entrar</button>
<button><a href="crear.php">Crear</a></button>
</FORM>
<span>¿Olvidó la </span><a href="recuperar2.php"> contraseña</a><span>?</span>
</div>
</div>
</div>
<?php include_once "pie.php"?>
