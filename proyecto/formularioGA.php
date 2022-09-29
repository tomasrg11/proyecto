<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="formulario">
        <form action="registro_user.php" method="post">
        <h1> Base de datos </h1>
        <p>
            <label> Producto </label>
            <input type="text" name="producto">
         </p>

         <p>
            <label> Marca </label>
            <input type="text" name="marca">
         </p>

         <p>
            <label> Cantidad </label>
            <input type="text" name="cantidad">
         </p>

         <p>
            <label> Litros o Gramaje </label>
            <input type="text" name="lg">
         </p>

         <p>
            <label> Unidades </label>
            <input type="text" name="unidades">
         </p>

         <input type="submit" name="" value="ENVIAR">
        </form>
    </div>
</body>
</html>