<?php session_start();
if($_SESSION['rol']==session_id()){
include_once "bbdd.php";
$username=$_REQUEST['usuario'];
$consulta="select * from usuario where username='".$username."'";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos 1");
$columna = mysqli_fetch_array( $resultado );
if(hash('ripemd160',$columna['username'])==hash('ripemd160',$username)){ 
    header('Location: crear2.php');
}else{
    $contraseña2=$_REQUEST['contraseña2'];
    $contraseña=$_REQUEST['contraseña'];
    if($contrasena==$contraseña2){
$nombre=$_REQUEST['nombre'];
$email=$_REQUEST['email'];
$consulta="call crear_user ('".$nombre."','".$username."','".$contraseña."','".$email."')";
mysqli_query($conexion,$consulta) or die ("El usuario que usted esta creando no es valido");
header('Location: cliente.php');
$_SESSION['rol']="cliente";
}else{
    header('Location: contraseña.php');
}
}
}else{
header('Location: error404.html');
}?>
