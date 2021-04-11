<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"> -->

    <!-- Style Bulma -->
    <link rel="stylesheet" href="bulma/css/bulma.min.css">


    <!-- Font Awesone -->
    <link rel="stylesheet" href="library/fontawesome/css/all.min.css">



    <title>Programación 2</title>
</head>

<body>
    <!-- Barra de Menu -->
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="IMG/ico.png" alt="Logo de Clase" width="28" height="28">
                
            </a>
            <div class="navbar-burger" data-target="navbarBasicExample" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navbar-menu" id="nav-links">
            <div class="navbar-start">
                <a class="navbar-item" href="#">
                    General
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                        Unidad 01:
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="#">
                            Unidad 01: Conceptos Básicos
                        </a>
                        <hr class="navbar-divider">
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="button is-primary" href="#">
                                <span class="icon">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>
                                <span>Cerrar sesión</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <section class="hero is-dark">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Clase de Programación 2
                </h1>
                <h2 class="subtitle">
                    P1-2021
                </h2>
            </div>
        </div>
    </section>

    <!-- Cuerpo -->
    <section class="section">
        <div class="columns is-multiline is-mobile">
            <div class="column is-one-quarter">
                <!-- para trabajar con menu -->
                <aside class="menu">
                    <p class="menu-label">
                        <i class="fas fa-laptop-code"></i> General
                    </p>
                    <ul class="menu-list">
                        <li> <a> Descripción </a></li>
                        <li> <a> Puntos Destacados </a></li>
                    </ul>
                    <p class="menu-label">
                        <i class="far fa-window-maximize"></i> Unidad 01:
                    </p>
                    <ul class="menu-list">
                        <li> <a> Unidad 01: Conceptos Básicos </a></li>
                    </ul>
                </aside>
            </div>

            <div class="column is-half">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi quam, tincidunt ac justo at, posuere luctus elit. Donec vitae tortor vitae turpis scelerisque vehicula. Nam tristique risus id est ultrices, quis rutrum nisl convallis. Sed egestas viverra lectus, a ultricies nulla. Nam vitae tempor mi, finibus convallis eros. Etiam eu sem elementum, tempor velit eget, interdum mi. In molestie, diam sit amet ullamcorper pretium, mauris risus tincidunt orci, eu hendrerit eros ex ut ipsum.
                </p>
            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Hecho con <i class="fas fa-mug-hot"></i> & <i class="fas fa-laptop-code"></i> por </strong> <a href="https://mangusoft.com">Mangusoft SRL</a>.
            </p>
        </div>
    </footer>


</body>

</html>