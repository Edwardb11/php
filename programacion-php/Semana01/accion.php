<?php
include_once("../php/pheader.php");
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li><a href="ejemplo02.php">Entrada de datos</a></li>
            <li class="is-active"><a href="#" aria-current="page"> Resultados de Entrada de datos</a></li>

        </ul>

    </nav>

    <!-- Titulos -->

    <div class="block">

        <h1 class="title">Unidad01</h1>

        <h2 class="subtitle">Resultados de Entrada de datos</h2>

    </div>

    <!-- Contenido -->

    <div class="block">
        <article class="message">
            <div class="message-header">
                
                <p>Salodos <?php 
                echo  htmlspecialchars($_POST['nombre'])
                ?></p>
            </div>
            <div class="message-body">
            <p>Su correo es <?php 
                echo  htmlspecialchars($_POST['correo'])
                ?></p>
            </div>
        </article>

    </div>

</div>
<!-- <div class="colum is half">
    <p>
        <code> Hola mundo!!</code>
    </p> -->

<?php
include_once("../php/pfooter.php");
?>