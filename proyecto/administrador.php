<?php
session_start();

if (isset($_SESSION["usuario"]) && ($_SESSION["tipo_user"]== 'admin')) {
	//si no existe,va a la pagina de autenticacion
	//echo $_SESSION["Nombre"];
	}else{
		header("Location:login.php");
		//salimos de este script
		exit();
	}
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title> Bienvenido</title>
	</head>
<body>
<h1>Bienvenido(a), <?php echo $_SESSION['nombre']; ?><br>
<h2>ADMINISTRADOR</h2>
    <?php
    echo $_SESSION['usuario'];
    echo "<br>";
    echo "Es ADMINISTRADOR";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>
    </h1>
    <a href="mostrar_usuarios.php">Ver usuarios</a> <br>
    <a href="cambiar.php">Cambiar clave</a> <br>
    <a href="buscar_usuario.php"></a> <br>
    <a href="cerrar.php">Cerrar sesion</a>


    <h2><a href="formulario_admin.php">Ingresar usuarios</a></h2>
</body>
</html>