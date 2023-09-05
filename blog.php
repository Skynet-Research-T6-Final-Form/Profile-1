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
                <div class="mt-3 mb-5 pt-4">
                <h1 class="fw-bold text-decoration-underline">4 hechos interesantes del desarrollo de videojuegos</h1>
                </div>
                <h2>Minecraft fue programado en Java</h2>
                <p>
                    ¡Uno de los juegos más populares creados en Java que deja a los niños sencillamente alucinados es el Minecraft! Sí, Minecraft se desarrolló 
                    en Java por la empresa Mojave en su primera y más popular versión (antes de ser adquirido por Microsoft). Además del juego en sí, los servidores 
                    que permiten juegos online multiplayer también se desarrollaron en Java, generando una experiencia de mundo virtual compartido increíble.
                </p>
                <hr>
                <h2>Conoces Pokemon Go, ¿verdad?</h2>
                <p>
                    Bueno, Niantic Lab que desarrolló el juego en conjunto con Nintendo ya había desarrollado un juego de realidad Aumentada (si, realidad 
                    aumentada de verdad) con geolocalización en JAVA usando LibGDX. Este juego es Ingres Prime que combina geolocalización, RA en una misión 
                    entre Iluminados y Resistencia para obtención del poder de la Materia Exótica.
                </p>
                <hr>
                <h2>El detrás de los juegos</h2>
                <p>
                    No solo crear un juego en Java es interesante. Muchos juegos tienen un sistema de back-end extremamente robusto que permite, por ejemplo, 
                    registrar nuevos jugadores, actualizar ranking, crear salas de juegos, generar dashboards de informaciones sobre comprometimiento de 
                    jugadores, número de jugadores activos, entre miles de otras herramientas, todo desarrollado con Java por medio de su infraestructura 
                    de desarrollo Web y Cloud. Frameworks como Java EE (Jakarta EE) y Spring son fundamentales para viabilizar este desarrollo.
                </p>
                <hr>
                <h2>Juegos multiplataforma</h2>
                <p>
                    Hablando en juegos, existe un framework (que es un conjunto de bibliotecas y recursos de programación) para Java denominado LibGDX que 
                    permite la creación de juegos multiplataforma, de forma que programas 1 única vez y logras generar estas diferentes versiones de tu juego 
                    de manera muy rápida y fácil. LibGDX es también un proyecto OpenSource, en el cual cualquier programador puede contribuir para su evolución 
                    (http://libgdx.badlogicgames.com).
                </p>
            </div>

            <div class="col-md-5 mt-5 ms-5 p-5">
                <div class="mt-5 p-5">
                <img class="minecraft" src="IMG/minecraft.avif" alt="Minecraft creado en Java">
                </div>
            </div>
        </div>
    </div>

    <?php

    renderizarFooter();
    ?>

</body>
</html>