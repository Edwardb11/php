<?php
include_once('../php/pheader.php');
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../pbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Unidad 03: Funciones</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Unidad 03:</h1>
        <h2 class="subtitle">Funciones</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="resultado.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="field">
                <label class="label"> Usuario</label>
                <div class="control">
                    <input class="input" type="text" name="user" id="user" placeholder="Usuario" require>
                </div>
            </div>

            <div class="field">
                <label class="label"> Contraseña</label>
                <div class="control">
                    <input class="input" type="password" name="pass" id="pass" placeholder="Contraseña" require>
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

<?php
include_once('../php/pfooter.php');
?>