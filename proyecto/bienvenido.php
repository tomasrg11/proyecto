<?php 
session_start();

if(isset($_SESSION["nombre"])) {
	//si no existe, va a la pagina de autenticacion
	//echo $_SESSION["nombre"];
}else{ 
	header("Location: login.php");
	//salimos de este script
	exit();

}



?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title> Bienvenido</title>

	<meta charset="utf-8">
		
		
	</style>
</head>
<body>
<h1>Bienvenido(a), <?php echo $_SESSION['nombre']; ?><br>
<h2>USUARIO</h2>
    <?php 
    echo $_SESSION['usuario'];
    echo "<br>";
    echo "Es usuario";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>


</h1>
<a href="cerrar.php"> CERRAR SESION </a>
<h2><a href="cambiar.php">Cambiar contraseña</a></h2>
</body>
</html>


