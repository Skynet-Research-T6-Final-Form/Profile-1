<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Profile</title>
    <link rel="shortcut icon" href="IMG/800px-Poké_Ball_(Ilustración).png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://icons.getbootstrap.com/">
</head>
<body>
    <?php
    require "repeticua.php";

    renderizarHeader();
    ?>

    <br>
    <br>
    <br>
    <br>
    <div class="ms-5">
    <form class="ms-5" action="php/registrarContacto.php" method="post">

        
        <div class="ms-5">
        <label class="me-5" for="nombre">Nombre:</label>          
        <input class="ms-5" type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" required>
        </div>

        <br>

        
        <div class="ms-5">
        <label class="me-5" for="apellido">Apellido:</label>
        <input class="ms-5" type="text" name="apellido" id="apellido" placeholder="Ingresa tu apellido" required>
        </div>

        <br>

        
        <div class="ms-5">
        <label class="me-5" for="email">Correo:</label>
        <input class="ms-5" type="email" name="email" id="email" placeholder="Ingresa tu correo" required>
        </div>
        

        <br>

        
        <div class="ms-5">
        <label class="me-5" for="telefono">Teléfono(Opcional):</label>
        <input class="ms-2" type="text" name="telefono" id="telefono" placeholder="Ingresa tu teléfono">
        </div>
        

        <br>

        <div class="ms-5">
        <label class="me-5" for="comentario">Comentarios(Opcional):</label>
        <br>
        <textarea name="comentario" id="comentario" cols="50" rows="10"></textarea>
        </div>

        <br>

        <div class="ms-5">
        <input type="submit" value="ENVIAR DATOS">
        </div>
    </form>
    </div>

    <br>
    <br>
    <br>
    <br>
</body>
    <?php

    renderizarFooter();
    ?>
</html>