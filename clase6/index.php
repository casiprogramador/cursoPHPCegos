<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="enviar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <br>
        <label for="ciudad">Ciudad:</label>
        <select name="ciudad">
            <option value="la paz">La Paz</option>
            <option value="Cochabamba">Cochabamba</option>
            <option value="santa cruz">Santa Cruz</option>
        </select>
        <br>
        <br>
        <label for="ciudad">Descripcion:</label>
        <br>
        <textarea name="descripcion" cols="20" rows="5"></textarea>
        <br>
        <br>
        <label for="estado">Estado</label>
        <br>
        <input type="checkbox" name="estado[]" value="activo"> Activo
        <br>
        <input type="checkbox" name="estado[]" value="inactivo"> Inactivo
        <br>
        <input type="checkbox" name="estado[]" value="elimnado"> Eliminado
        <br>
        <br>
        <input type="radio" name="sexo" value="hombre"  /> Hombre
        <input type="radio" name="sexo" value="mujer" checked="checked"/> Mujer
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>