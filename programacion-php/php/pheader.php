<?php
include_once('consultas.php');
include_once('conexiondb.php');

if (isset($_SESSION['userid'])) {
    $vUsuario = $_SESSION['userid'];
    $row = consultarUsuarios($link, $vUsuario);
} else {
    $_SESSION['MensajeTexto'] = "Error acceso al sistema  no registrado.";
    $_SESSION['MensajeTipo'] = "is-danger";

    header("Location: ../index.php");
    //echo"<script language='javascript'>window.location='../index.php'</script>;";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"> -->
    <!-- Style Bulma -->
    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
    <!-- Font Awesone -->
    <!-- <link rel="stylesheet" href="../library/fontawesome/css/all.min.css"> -->
    <title>Ucateci Programación 2</title>
    <script src="https://kit.fontawesome.com/d58f2f3d61.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Barra de Menu -->
    <nav class="navbar is-transparent">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="../IMG/ico.png" alt="Logo de Clase" width="28" height="28">
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
                        <a class="navbar-item" href="#">
                            Unidad 02: Estcutura de control
                        </a>
                        <a class="navbar-item" href="#">
                            Unidad 03: Funciones
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
                                    Bienvenido: <?php echo utf8_decode($row['username']); ?>
                                </span>
                            </a>
                            <a class="button is-primary" href="../php/cerrar.php">
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
                        <i class="far fa-window-maximize"></i> Unidad 01: Conceptos Básicos
                    </p>
                    <ul class="menu-list">
                        <li> <a href="../Semana01/ejemplo01.php">Salida de datos</a> </li>
                        <li> <a href="../Semana01/ejemplo02.php">Entrada de datos</a> </li>
                        <li> <a href="../Semana01/ejemplo3.php">Tipos de datos</a> </li>
                        <li> <a href="../Semana01/ejemplo04.php">Operadores de Comparacion y Logicos</a> </li>
                    </ul>

                    <p class="menu-label">
                        <i class="far fa-window-maximize"></i> Unidad 01: Ejercicios
                    </p>
                    <ul class="menu-list">
                        <li> <a href="../Semana01/Aritmetico.php">Ejercicio01: Operadores aritmeticos</a> </li>
                        <li> <a href="../Semana01/Comparacion.php">Ejercicio02: Operadores de comparacion</a> </li>
                        <li> <a href="../Semana01/Logico.php">Ejercicio03: Operadores Logicos</a> </li>
                        <li> <a href="../Semana01/Incre.php">Ejercicio04: Operadores de incremento y descremento</a>
                        </li>
                        <li> <a href="../Semana01/Concatenar.php">Ejercicio05: Concatenar</a> </li>

                    </ul>

                    <p class="menu-label">
                        <i class="far fa-window-maximize"></i> Unidad 02: Estructura de control
                    </p>
                    <ul class="menu-list">
                        <li> <a href="../Semana02/ejemplo05.php">Condicionales: Simples y compuestas</a> </li>
                        <li> <a href="../Semana02/ejemplo06.php">Condiciones: Anidadas</a> </li>
                        <li> <a href="../Semana02/ejemplo7.php">Condicionales: Switch</a> </li>
                        <li> <a href="../Semana02/ejemplo08.php">Condicionales: While</a> </li>
                        <li> <a href="../Semana02/ejemplo09.php">Condicionales: For</a> </li>
                        <li> <a href="../Semana02/ejemplo10.php">Condicionales: Foreach</a> </li>
                        <li> <a href="../Semana02/ejemplo11.php">Condicionales: Foreach</a> </li>

                        <p class="menu-label">
                            <i class="far fa-window-maximize"></i> Unidad 02: Ejercicios
                        </p>
                        <ul class="menu-list">
                            <li> <a href="../Semana02/ejercicio1.php">Ejercicio1</a> </li>
                            <li> <a href="../Semana02/ejercicio2.php">Ejercicio2</a> </li>
                            <li> <a href="../Semana02/ejercicio3.php">Ejercicio3</a> </li>
                            <li> <a href="../Semana02/ejercicio4.php">Ejercicio4</a> </li>
                            <li> <a href="../Semana02/ejercicio5.php">Ejercicio5</a> </li>
                            <li> <a href="../Semana02/ejercicio6.php">Ejercicio6</a> </li>
                            <li> <a href="../Semana02/ejercicio7.php">Ejercicio7</a> </li>
                        </ul>
                        <p class="menu-label">
                            <i class="far fa-window-maximize"></i> Unidad 03: Funciones
                        </p>
                        <ul class="menu-list">
                            <li> <a href="../Semana03/ejemplo12.php">Funciones caso: 01</a> </li>
                            <li> <a href="../Semana03/ejemplo13.php">Funciones caso: 02</a> </li>

                        </ul>
                        <p class="menu-label">
                            <i class="far fa-window-maximize"></i> Unidad 04: Base de datos
                        </p>
                        <ul class="menu-list">
                            <li> <a href="../Semana04/grupo-mant.php">CRUD - Tipo de base de datos</a> </li>
                            <li> <a href="../Semana04/usuarios-mant.php">CRUD - Tipo de usuarios</a> </li>
                            <li> <a href="../TP_crandoCRUD/index1.php">CRUD - Tipo_mantenimiento </a> </li>
                            <li> <a href="../TP_crandoCRUD/index2.php">CRUD - Tipo_Equipo</a> </li>
                            <li> <a href="../TP_crandoCRUD/index3.php">CRUD - Propietario</a> </li>
                            <li> <a href="../TP_crandoCRUD/index4.php">CRUD - Cliente</a> </li>
                            <li> <a href="../TP_crandoCRUD/index5.php">CRUD - Tripulacion</a> </li>


                        </ul>
                </aside>
            </div>