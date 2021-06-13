<?php
include_once('../php/pheader.php');
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Salida de datos</a></li>

        </ul>

    </nav>

    <!-- Titulos -->

    <div class="block">

        <h1 class="title">Unidad01</h1>

        <h2 class="subtitle">Unidad 01: Salida de datos</h2>

    </div>

    <!-- Contenido -->

    <div class="block">
        Etiqueta para imprimir en pantalla
        <?php 
        echo "<br>";
        echo "hola mundo";
        echo "<br>";
        ?>


    </div>

</div>
<!-- <div class="colum is half">
    <p>
        <code> Hola mundo!!</code>
    </p> -->

<?php
include_once("../php/pfooter.php");;
?>