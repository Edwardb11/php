<?php
include_once('../php/pheader.php')
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Concatenar</a></li>

        </ul>

    </nav>

    <!-- Contenido -->


    <div class="block">

        <div class="message-body">
            <article class="message">
                <div class="message-header">

                    <p>Texto 1: <?php
                                echo  $_POST['valor1']
                                ?></p>
                    <p>Texto 2: <?php
                                echo  $_POST['valor2']
                                ?></p>
            </article>
            <code>
                <?php
                $a = $_POST['valor1'];
                $b =  $_POST['valor2'];
                $resultado = $a .' '. $b;
                echo "El texto concatenado es: " .$resultado;
                ?>
            </code>

        </div>


    </div>

</div>
<!-- <div class="colum is half">
    <p>
        <code> Hola mundo!!</code>
    </p> -->

<?php
include_once("../php/pfooter.php");;
?>