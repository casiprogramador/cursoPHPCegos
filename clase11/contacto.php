<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contactos</title>
</head>
<body>
    <h1>Formulario Contactos</h1>
    <div class="formulario">
        <form action="enviado.php" method="post" id="formulario-contacto">
            <label for="nombre">Nombre:</label>
            <br>
            <input type="text" name="nombre" id="id-nombre">
            <span class="error error-nombre">Debe ingresar el nombre</span>
            <br>
            <label for="email">Email:</label>
            <br>
            <input type="text" name="email" id="id-email">
            <span class="error error-email">Debe ingresar el correo</span>
            <br>
            <label for="mensaje">Mensaje:</label>
            <br>
            <textarea name="mensaje" cols="30" rows="10" id="id-mensaje"></textarea>
            <span class="error error-mensaje">Debe ingresar su mensaje</span>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>