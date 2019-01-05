<?php include('header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
        body { background: white;color: black}
    </style>
    <title>Mi primera pagina web</title>
</head>
<body>
    <h1><?php echo $titulo ?></h1>
    <ol>
    <?php foreach($elementos as $elemento) {?>
        <li><?php echo $elemento ?></li>
    <?php } ?>
    </ol>
    <h1>Tabla</h1>
    <table style="border: 1">
        <tr>
            <td>Columna 1</td>
            <td>Columna 2</td>
            <td>Columna 3</td>
        </tr>
        <tr>
            <td>Columna 1</td>
            <td>Columna 2</td>
            <td>Columna 3</td>
        </tr>
    </table>
    <?php include('footer.php') ?>
    <script>
        //alert('Hola mundo');
    </script>
</body>
</html>