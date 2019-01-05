<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="resultadoCalculadora.php" method="POST">
        <label for="numero1">Numero 1:</label>
        <input type="text" name="numero1">
        <br>
        <label for="numero2">Numero 2:</label>
        <input type="text" name="numero2">
        <br>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>