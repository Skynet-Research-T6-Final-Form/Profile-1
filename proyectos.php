<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

    <div class="container">
        <div class="row gap-2 p-5 mt-5 ms-3">
            <h1 class="mt-5 mb-5 fw-bold text-decoration-underline">Trabajos e Informacion</h1>
            <p class="research gap-3">
                Los trabajos de investigacion que he realizado son:
            </p>
        </div>
    </div>


            <div class="ms-5">
            <div class="ms-5">
            <div class="row ms-5 mb-5 gap-5">
            <div class="card" style="width: 19rem;">
                <img src="IMG/quien es ese pokemon.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Trabajo de Investigacion 1</h5>
                    <p class="card-text">El primer trabajo nunca se olvida y este es de un tema peculiarmente querido para mi.</p>
                </div>
                <div class="ms-5">
                <div class="card-body ms-5">
                    <a href="https://6441760113efa416dc72d63d--willowy-faun-db1012.netlify.app" class="card-link">Pulsame</a>
                </div>
                </div>
            </div>



            <div class="card" style="width: 19rem;">
                <img src="IMG/espejo vs espejo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Trabajo de Investigacion 2</h5>
                    <p class="card-text">En este trabajo trate de emular la imagen de una pagina solo con codigo de programacion.</p>
                </div>
                <div class="ms-5">
                <div class="card-body ms-5">
                    <a href="https://fancy-lokum-aa3535.netlify.app/" class="card-link">Pulsame</a>
                </div>
                </div>
            </div>



            <div class="card" style="width: 19rem;">
                <img src="IMG/math.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Trabajo de Investigacion 3</h5>
                    <p class="card-text">Esta es una pagina donde se pueden resolver problemas matematicos y convertir distintas medidas.</p>
                </div>
                <div class="ms-5">
                <div class="card-body ms-5">
                    <a href="https://illustrious-scone-821b21.netlify.app/" class="card-link">Pulsame</a>
                </div>
                </div>
            </div>



            <div class="card" style="width: 19rem;">
                <img src="IMG/Pika Store.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Trabajo de Investigacion 4</h5>
                    <p class="card-text">Esta es una pequena tienda con un catalogo que hice.</p>
                </div>
                <div class="ms-5">
                <div class="card-body ms-5">
                    <a href="https://playful-marigold-0e7643.netlify.app/" class="card-link">Pulsame</a>
                </div>
                </div>
            </div>
            </div>
            </div>
            </div>

            <div>
                <div class="p-5">
                    <p class="links gap-1 ms-5">
                    Te recomiendo visitar las siguientes paginas, para que siempre estes bien informado de mis avances:
                    </p>
                </div>
                        <div class="d-grid mb-5 gap-2 col-6 mx-auto">
                            <a class="btn btn-light btn-lg mb-1 p-2 " href="https://www.pokemon.com/el" target="_blank" role="button">Pokemon</a>
                            <a class="btn btn-light btn-lg mb-1 p-2 " href="https://bulbapedia.bulbagarden.net/wiki/Main_Page" target="_blank" role="button">Bulbapedia</a>
                            <a class="btn btn-light btn-lg mb-1 p-2 " href="https://www.serebii.net/" target="_blank" role="button">Serebii</a>
                        </div>

            </div>


    <?php

    renderizarFooter();
    ?>
</body>