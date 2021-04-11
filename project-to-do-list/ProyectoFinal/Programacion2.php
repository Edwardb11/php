<?php
//Programacion 2 profesor

include_once('php/profesor.php');
?>
<div class="column is-half is-8">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="inicioProfesor.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Programación 2</a></li>
        </ul>
    </nav>

    <!-- Titulos -->
    <div class="block">
        <h1 class="title"> Programación 2 </h1>
        <h2 class="subtitle"> </h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <div class="columns">
            <div class="column is-6 ">

                <br>
                <p>Bienvenido profesor: <?php echo utf8_decode($row['nombre'] . ' ' . $row['apellido']); ?>
                </p>
                <br>
                <a href="asignarTarea.php"><button class="button is-info"> Asignar, editar y remover tareas</button></a>
                <a href="ENLISTARTarea.php"> <button class="button is-success">Enlistar tareas</button></a>

            </div>

            <div class="column is-6">
                <figure class="image is-3by2">
                    <img src="src/too.png  ">
                </figure>


            </div>
        </div>
    </div>
</div>


<?php
include_once('php/pfooter.php');
?>