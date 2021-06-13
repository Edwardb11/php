<?php
include_once('php/estudiante.php');
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="descripcion.php">Inicio</a></li>

        </ul>
    </nav>

    <!-- Titulos -->
    <div class="block">
        <h1 class="title"> TO DO LIST - LISTA DE TAREAS</h1>
        <h2 class="subtitle">Inicio </h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <p>Bienvenido <?php echo utf8_decode($row['nombre'] . ' ' . $row['apellido']); ?>
        </p>
    </div>

    <figure class="image is-5by3">
        <img src="src/estudianteIMG.jpg  ">
    </figure>
</div>

<?php
include_once('php/pfooter.php');
?>