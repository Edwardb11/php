<?php
include_once('conexionDB.php');
include_once('consultas.php');


if (isset($_SESSION['idprofesor'])) {
    $vUsuario = $_SESSION['idprofesor'];
    $row = consultarProfesor($link, $vUsuario);
} else {
    $_SESSION['MensajeTexto'] = "Error acceso al sistema  no registrado.";
    $_SESSION['MensajeTipo'] = "is-danger";
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <link rel="stylesheet" href="bulma/css/bulma.min.css">
    <!-- Font Awesone -->
    <script src="https://kit.fontawesome.com/d58f2f3d61.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Barra de Menu -->
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="src/profesor.jpg" alt="Logo de Clase" width="40" height="40">
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
                        Materia
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="Programacion2.php">
                            Programación 2
                        </a>

                        <hr class="navbar-divider">
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="button is-light" href="#">
                                <span class="icon">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span>
                                    Bienvenido: <?php echo utf8_decode($row['nombre']); ?>
                                </span>
                            </a>
                            <a class="button is-success" href="php/cerrar.php">
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
                    TO DO LIST
                </h1>
                <h2 class="subtitle">
                    Profesor
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
                        <li> <a href="inicioProfesor.php"> Inicio</a></li>
                    </ul>
                    <ul class="menu-list">
                        <li> <a href="infoProfesor.php"> Información de los estudiante</a></li>
                    </ul>
                    <p class="menu-label">
                        <i class="far fa-window-maximize"></i> TO DO LIST – LISTA DE TAREAS
                    </p>
                    <ul class="menu-list">
                        <li> <a href="Programacion2.php">Programación 2</a> </li>

                    </ul>


                </aside>
            </div>