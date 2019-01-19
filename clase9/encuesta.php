<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="flex">
    <div class="encuesta">
        <h2>Encuesta: ¿Que tipo de programador PHP eres?</h2>
        <p>*Reponde las siguientes preguntas</p>
        <form action="guardar_encuesta.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <label for="tipo de herramietna">¿Que framework utilizas para trabajar?</label>
            <select name="herramienta">
                <option value="laravel">Laravel</option>
                <option value="symfony">Symfony</option>
                <option value="codeigniter">Codeigniter</option>
                <option value="ninguno">Ninguno</option>
            </select>
            <label for="estandar codigo">¿Trabajas bajo un estandar de codigo?</label>
            <select name="estandar">
                <option value="psr1">PSR1</option>
                <option value="psr2">PSR2</option>
                <option value="psr3">PSR3</option>
                <option value="psr4">PSR4</option>
                <option value="todos">Todos</option>
                <option value="ninguno">Ninguno</option>
            </select>
            <label for="base de datos">¿Que base de datos utilizas mas?</label>
            <select name="base_datos">
                <option value="mysql">Mysql</option>
                <option value="postgresql">Postgresql</option>
                <option value="sqlserver">SqlServer</option>
                <option value="mongodb">MongoDB</option>
                <option value="firebase">Firebase</option>
                <option value="ninguno">Ninguno</option>
            </select>
            <label for="sistema operativo">¿Que sistema operativo usas mas?</label>
            <select name="sistema">
                <option value="Windows">Windows</option>
                <option value="Linux">Linux</option>
                <option value="MacOS">MacOS</option>
            </select>
            <label for="control de versiones">¿Que control de versiones utilizas?</label>
            <select name="control_versiones">
                <option value="git">GIT</option>
                <option value="subversion">Subversion</option>
                <option value="mercurial">Mercurial</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>

</body>
</html>