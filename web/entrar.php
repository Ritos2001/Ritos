<?php session_start();
if($_SESSION['rol']==session_id()){?>
<?php
include_once "bbdd.php";
$username=$_REQUEST['username'];
$passwd=$_REQUEST['passwd'];
$consulta="select * from vista_entrar where username='".$username."' && passwd='".$passwd."'";
$resultado=mysqli_query($conexion,$consulta) or die ("Algo ha ido mal en la consulta a la base de datos 1");
$columna = mysqli_fetch_array( $resultado );
if(hash('ripemd160',$columna['username'])==hash('ripemd160',$username) && hash('ripemd160',$columna['passwd'])==hash('ripemd160',$passwd)){
$consulta2="select * from vista_entrar2 where username='".$username."'";
$resultado2=mysqli_query($conexion,$consulta2) or die ("Algo ha ido mal en la consulta a la base de datos 2");
$columna2 = mysqli_fetch_array( $resultado2 );
        if($columna2["nombre"]=="Cliente"){
		$_SESSION['rol']="cliente";
                header('Location: cliente.php');
        }else if($columna2["nombre"]=="Repartidor"){
		$_SESSION['rol']="repartidor";
               header('Location: repartidor.php');
        }else if($columna2["nombre"]=="Jefe"){
		$_SESSION['rol']="mantenimiento";
                header('Location: usuario.php');
        }else if($columna2["nombre"]=="Mantenimiento"){
		$_SESSION['rol']="mantenimiento";
		header('Location: usuario.php');
        }else if($columna2["nombre"]=="Vendedor"){
		$_SESSION['rol']="vendedor";
		header('Location: vendedor.php');
        }else if($columna2["nombre"]=="Almacén"){
		$_SESSION['rol']="almacen";
                header('Location: almacen.php');
	}else{
		header('Location: indexerror.php');
	}
}else{
header('Location: indexerror.php');
}
?>
<?php }else{
header('Location: error404.html');
}?>

