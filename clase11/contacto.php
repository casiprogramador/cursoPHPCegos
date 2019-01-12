<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario Contacto</h1>
    <div class="formulario">
    <form action="enviado.php" method="post" id="formulario-contacto">
        <label for="nombre">Nombre:</label>
        <br>
        <input type="text" name="nombre" id="id-nombre">
        <br>
        <label for="email">Correo:</label>
        <br>
        <input type="text" name="email" id="id-email">
        <br>
        <label for="mensaje">Mensaje:</label>
        <br>
        <textarea name="mensaje" cols="30" rows="10" name="mensaje" id="id-mensaje"></textarea>
        <br>
        <input type="submit" value="Enviar Mensaje">
    </form>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>