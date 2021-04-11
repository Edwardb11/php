<?php
include_once('../php/pheader.php');
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Entrada de datos</a></li>

        </ul>

    </nav>

    <!-- Titulos -->

    <div class="block">

        <h1 class="title">Unidad01</h1>

        <h2 class="subtitle">Concepto basicos: Entrada de datos</h2>

    </div>

    <!-- Contenido -->

    <div class="block">
        <form action="accion.php" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label">Nombre</label>
                <div class="control">
                    <input class="input" type="text" name="nombre" placeholder="e.g Alex Smith">
                </div>
            </div>

            <div class="field">
                <label class="label">Correo</label>
                <div class="control">
                    <input class="input" type="email" name="correo" placeholder="e.g. alexsmith@gmail.com">
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

</div>
<!-- <div class="colum is half">
    <p>
        <code> Hola mundo!!</code>
    </p> -->

<?php
include_once("../php/pfooter.php");;
?>