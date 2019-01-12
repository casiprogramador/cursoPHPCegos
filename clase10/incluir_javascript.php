<!-- 
    - Se puede agregar javascript en el header, al final del body o en un archivo externo
    - Solo usar una manera 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clase 10</title>
    <script>
        alert('Javascript en el header');
    </script>
</head>
<body>
    <h1>Javascript</h1>

    <script>
        alert('Javascript en el body');
    </script>
    <script src="script.js"></script>
</body>
</html>