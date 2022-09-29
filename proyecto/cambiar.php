<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo2.css">
	<title>Cambiar contraseña</title>
	<script type="text/javascript">
		function comprobarClave(){
			clave1 = document.f1.clave1.value
			clave2 = document.f1.clave1.value

			if (clave1== clave2){
				alert("La contraseña se cambio con exito");
			}else{
				alert("Las dos claves son distintas...vuelve a intentarlo.");
			}
	}
	</script>

</head>
<body>

	<div class="container">
		<h1> Cambiar contraseña</h1>
		<form method="post" action="cambiar_pass.php" name="f1">
			<h2>Ingrese nueva contraseña</h2><br>
			<input type="password" name="clave1">
			<h2>Verifique  contraseña</h2>
			<input type="password" name="clave2"><br><br>
			<input type="submit" name="" value="Cambiar" onclick="comprobarClave()">

		</form>
	</div>

</body>
</html>