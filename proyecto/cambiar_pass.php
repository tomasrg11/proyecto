<?php 
include "conexion.php";
session_start();

 if(isset($_SESSION['usuario'])){
}else{
 	header("location:login.php");
 	exit();
 }


$pass1 = $_POST['clave1'];
$pass2 = $_POST['clave2'];

if($pass1 == $pass2) {
	mysqli_query($conexion, "UPDATE salud SET Password = '$pass2'") or die(mysqli_error());
	header("location:login.php");
}else{
	header("location: cambiar.php");
	exit();
}
?>

