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
        <h1 class="title">Unidad 02: Ejercicio 1</h1>
        <h2 class="subtitle">Simular un juego de dados digital: Escriba un programa que
            cada vez que se ejecute muestre un valor entre 1 y 20 al azar.</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <article class="message">
            <div class="message-header">
                <p>
                    El resultado es:
                </p>
            </div>
            <div class="message-body">
                <?php
                echo (rand(1, 20));
                ?>
                <div class="field is-grouped">
                    <p class="control">
                        <button class="button is-link" type="cancel" onclick="javascript:window.location='ejercicio1.php';">Completar otro formulario </button>
                    </p>
                </div>
            </div>
        </article>
    </div>


</div>





<?php
include_once('../php/pfooter.php');
?>