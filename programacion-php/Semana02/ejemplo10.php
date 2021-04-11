<?php
include_once('../php/pheader.php');
include_once('../database/provincias.php');
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../pbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Estructuras de Control</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Unidad 02:</h1>
        <h2 class="subtitle">Ciclos Repetitivos - Foreach</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data">
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
    // isset() 
    // $_SERVER['REQUEST_METHOD'] == 'POST' -> esta funcion evalua si el metodo POST fue ejecutado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
                    foreach ($provincias as $key => $value) {
                        # code...
                        echo ($value['provincia_id']) . ' | ';
                        echo ($value['nombre']) . ' <br> ';
                    }
                    ?>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejemplo10.php';">Completar otro formulario </button>
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