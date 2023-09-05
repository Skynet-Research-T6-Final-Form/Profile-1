<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Profile</title>
        <link rel="shortcut icon" href="IMG/800px-Poké_Ball_(Ilustración).png" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://icons.getbootstrap.com/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>

    <?php
    require "repeticua.php";

    renderizarHeader();
    ?>
    
    <div class="container mx-auto">
        <div class="row gap-5">
            <div class="col-md-6 p-5 mt-5 ">
                <div class="mt-5 ms-5">
                <h1 class="mb-5 fw-bold text-decoration-underline">Contáctame</h1>
                <p>
                    ¡Hola! Si tienes alguna consulta para mi, quieres cooperar conmigo en algun trabajo/proyecto o solo quieres saludarme y mandarme algunas 
                    palabras reconfortantes sobre mi investigacion, no dudes en escribirme a mi correo o contactarme por mis redes sociales. Tratare de 
                    contestarte a la brevedad.
                    ¡Ahi nos vemos!
                </p>
                </div>
            </div>
            <div class="col-md-5 mt-5 ms-5 p-5">
                <div class="ms-3">
                <div class="mt-5 p-5">
                <div class="mt-4 mb-2 fs-3"><a target="_blank" href="https://www.facebook.com/stephan1thode1olivares"><i class="bi bi-facebook">  Facebook</i></a></div>
                <div class="mb-2 fs-3"><a target="_blank" href="https://www.instagram.com/stephanthodeo/"><i class="bi bi-instagram">  Instagram</i></a></div>
                <div class="mb-2 fs-3"><a target="_blank" href="https://twitter.com/o_thode"><i class="bi bi-twitter">  Twitter</i></a></div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ms-5">
    <div class="ms-5">
    <div class="ms-5">
    <div class="ms-5">
    <div class="ms-5">
    <div class="ms-4">
        <a class="btn bg-Buzzwole btn-lg mb-5 p-4 ms_contacto " href="/Evaluacion%20Continua%201%20PHP/formularioContacto.php" role="button">Pulsa para contactarme</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <br>
    <br>
    <br>

</body>
<?php

renderizarFooter();
?>

</html>