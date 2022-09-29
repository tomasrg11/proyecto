<?php 

include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];


$admin=mysqli_query($conexion,"SELECT * from usuarios where usuario='$usuario' && password='$password'&& tipo_user='admin'");
$usuario=mysqli_query($conexion,"SELECT * from usuarios where usuario='$usuario' && password='$password'&& tipo_user='user'");


if(mysqli_num_rows($admin)>0){
	$fila=mysqli_fetch_row($admin);
	$name=$fila[2];
	$apellidos=$fila[3];
	$usuario=$fila[4];
	$tipo=$fila[7];
	session_start();
	
	$_SESSION['nombre']="$name";
	$_SESSION['apellidos']="$apellidos";
	$_SESSION['usuario']="$usuario";
	$_SESSION['tipo_user']="$tipo";


	

   }elseif (mysqli_num_rows($usuario)>0){
   	   $fila=mysqli_fetch_row($usuario);
   	   $name=$fila[2];
   	   $usuario=$fila[4];
   	   session_start();
   	   
   	   $_SESSION['nombre']="$name";
   	   $_SESSION['usuario']="$usuario";

   	   header("Location:bienvenido.php");
   }else{
   	echo '<script language="javascript">alert("Error de autentificacion");window.location.href="login.html"</script>';
   	//header("Location: index.html");
   }






?>