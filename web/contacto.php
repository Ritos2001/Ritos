<?php session_start();
if($_SESSION['rol']=="cliente"){?>
<html>
	<head>
            <title>Formulario de contacto</title>
            <link rel="stylesheet" type="text/css" href="codigo4.css">
        </head>
    <body>
        <form>
            <label for="nombre">Nombre:</label><br>
            <input id="nombre" name="nombre" placeholder="Nombre completo"/><br>
            <label for="email">Email:</label><br>
            <input id="email" name="email" type="email" placeholder="ejemplo@gmail.com"/><br>
            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje..."></textarea><br>
	    <button><a href="cliente.php">Enviar</a></button>
	    <button><a href="cliente.php">Cancelar</a></button>
        </form>
    </body>
</html>
<?php }else{
header('Location: error404.html');
}?>
