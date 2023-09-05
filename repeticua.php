<?php

function renderizarHeader()
{
    echo <<<HTML
   <body class="body bg-Guzzlord text-Nihilego">
    <nav class="navbar navbar-expand-lg bg-Buzzwole .text-Nihilego">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Perfil de Programador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/Evaluacion%20Continua%201%20PHP/inicio.php">Inicio</a>
                    <a class="nav-link" href="/Evaluacion%20Continua%201%20PHP/proyectos.php">Proyecto</a>
                    <a class="nav-link" href="/Evaluacion%20Continua%201%20PHP/blog.php">Blog</a>
                    <a class="nav-link" href="/Evaluacion%20Continua%201%20PHP/contacto.php">Contacto</a>
                </div>
            </div>
        </div>
    </nav>
</body>
HTML;
}
?>



<?php

function renderizarFooter()
{
    echo <<<HTML
   <footer class="footer bg-Pheromosa mt-5 p-3 gap-2">
    <div>
        <div class="row">
            <div class="col-md-6">
                <div>Stephan Thode Olivares</div>
                <div>Email: <a href="mailto:sthodeo@gmail.com">sthodeo@gmail.com</a></div>
                <div>Telf: <a href="tel:51942794146">+51 942794146</a></div>
            </div>
            <div class="col-md-6 fs-1">
                <div>2023</div>
            </div>
        </div>
        <div class="copyright mt-5">
            <div>Todos los derechos reservados a Stephan Thode Olivares &copy;</div>
        </div>
    </div>
</footer>
HTML;
}

?>