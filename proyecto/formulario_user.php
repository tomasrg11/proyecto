<!DOCTYPE html>
<html lang="es">
<head>
	<title> Registro usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="short icon"  href="imagenes/t.ico">
	 <style type="text/css">
            .imag{
              position: absolute;
              left: 700px;
              top: 110px;

            }

      </style>
</head>
<body>

<div class="formulario_registro">
	<div class="form">
				
		<h1><img src="imagenes/t.ico" width="45" class="imag">REGISTRO USUARIO </h1>
	   <form method="post" action="logear.php">
	   	<p>
	   	Nombre 	
	   	<input type="text" name="nombre" placeholder="Nombre" class="field">	
	   	</p>
	   	<p>
	   	Apellidos
	   	<input type="text" name="apellido" placeholder="Apellidos" class="field">	
	   	</p>
	   	<p>
	   	Usuario 
	   	<input type="text" name="usuario" placeholder="Usuario" class="field">	
	   	</p>
	   	<p>
	   	Correo
	   	<input type="email" name="correo" placeholder="Correo" class="field">	
	   	</p>
	   	<p>
	   	Contraseña
	   	<input type="password" name="pass" placeholder="Contraseña" class="field">	
	   	</p>
	   	<br>
	   	<input type="submit" name="" value="Registrar" class="btn-green"> <br>
	   	<center><a href="login.php"> Ya tengo una cuenta </a><b>|</b><a href="formulario_admin.php"> Administrador </a></center>
	   </form>
       <br>
       
  </div>
</div>


</body>
</html>