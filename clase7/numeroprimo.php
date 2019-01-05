<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Funciones</h1>
    <form action="resultadoprimo.php" method="POST">
        <label for="numero">Ingrese el Numero 1:</label>
        <input type="text" name="numero">
        <br>
        <label for="numero">Ingrese el Numero 2:</label>
        <input type="text" name="numero2">
        <br>
        <label for="numero">Calcular:</label>
        <select name="operacion">
            <option value="primo">Numero Primo</option>
            <option value="par">Numero Par Impar</option>
            <option value="potencia">Potencia de un Numero</option>
        </select>
        <br>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>