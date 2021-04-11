<?php
include_once('../php/pheader.php');
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../pbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Unidad 02: Ejercicios</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Unidad 02: Ejercicio 2</h1>
        <h2 class="subtitle">Realice un programa que capture el nombre y genero de una persona,
            si la persona es genero Masculino debe imprimir “Buenos días Sr. ..... “ de
            lo contrario debe imprimir “Buenos días Sra. ....”</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                    <input class="input" type="text" name="nombre" id="nombre" placeholder="Ej: Edward">
                </div>
            </div>
            <div class="field">
                <label class="label"> Genero</label>
                <div class="control">
                    <input class="input" type="text" name="genero" id="genero" placeholder="Ej: F/M">
                </div>
            </div>

            <div class="field is-grouped">
                <p class="control">
                    <input class="button is-primary" type="submit">
                </p>
                <p class="control">
                    <input class="button is-light" type="reset">
                </p>
            </div>

        </form>
    </div>
    <?php
    if (isset($_POST['nombre']) && isset($_POST['genero'])) {
        $a = ucfirst($_POST['nombre']);  #Poner en mayuscula 1er caracter
        $b = strtoupper($_POST['genero']); #Convertir a mayuscula 
    ?>
        <div class="block">
            <article class="message">
                <div class="message-header">
                    <p>
                        El resultado es:
                    </p>
                </div>
                <div class="message-body">
                    <?php

                    if ($b == 'F') {
                        echo ('Buenos días Sra' . ' ' . $a);
                    } else {
                        echo ('Buenos días Sr' . ' ' . $a);
                    }
                    ?>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejercicio2.php';">Completar otro formulario </button>
                        </p>
                    </div>
                </div>
            </article>
        </div>
    <?php } ?>

</div>





<?php
include_once('../php/pfooter.php');
?>