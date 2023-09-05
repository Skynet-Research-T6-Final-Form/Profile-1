<!DOCTYPE html>
<html class="universe" lang="en">

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

</head>

<body>

    <?php
    require "repeticua.php";

    renderizarHeader();
    ?>

    <div class="container mx-auto">
        <div class="row gap-5 p-5">
            <div class="col-md-6 p-5">
                <div class="mt-5 pt-5">
                    ¡Hola! Mi nombre es
                </div>
                <h1>Stephan Thode Olivares</h1>
                <p>
                    Soy un Administrador de Negocios Globales, con gran dominio en idiomas, queriendo ampliar mi conocimiento con un sexto idioma, japones.
                    Mi nueva pasion adquirida es crear y diseñar sitios web, pero mi curiosidad y pasion por aprender de todo no queda ahi, ya que, algun dia,
                    me gustaria ser conocido como un Da Vinci de la actualidad y dejar una gran huella positiva en el mundo. Mi filosofia: "Todo empieza por la justicia".
                </p>
            </div>
            <div class="col-md-5 mt-5 ms-5">
                <img class="profile" src="IMG/STO en Comix.jpg" class="rounded mx-auto d-block" alt="Goku & Yo">
            </div>
        </div>
    </div>

    <?php

    renderizarFooter();
    ?>

</body>
</html>