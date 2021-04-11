<?php
include_once('php/profesor.php');
?>
<div class="column is-half is-full-fullhd">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="inicioProfesor.php">Inicio</a></li>
        </ul>
    </nav>

    <!-- Titulos -->
    <div class="block">
        <h1 class="title"> Inicio </h1>
        <h2 class="subtitle"> </h2>
    </div>
    <!-- Contenido -->
    <div class="block">


        <br>
        <p>Bienvenido profesor: <?php echo utf8_decode($row['nombre'] . ' ' . $row['apellido']); ?>
        </p>

        <figure class="image is-5by3">
            <img src="src/lista1.jpg  ">
        </figure>
    </div>
</div>

<?php
include_once('php/pfooter.php');
?>