<!DOCTYPE html>
<html lang="es">
    <head>
        <link href="estilo.css" rel="stylesheet" type="text/css">
        <meta charset="UTF-8">
        <title>Hola Mundo</title>
    </head>
    <body>
        <h1 align="center">Mensaje de PHP</h1>
        <?php 
        $var1 = 'id1';
        echo "<p>Hola Mundo desde PHP. Escribe un mensaje:</p>";
        ?>
        <input type="text" id="<?php echo $var1; ?>"/>
        <button onclick="pressed()">Desplegar Mensaje</button>


        <script src="funcionalidad.js"></script>
    </body>
</html>