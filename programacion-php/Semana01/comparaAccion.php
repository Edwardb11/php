<?php
include_once('../php/pheader.php');
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Operadores de comparacion</a></li>

        </ul>

    </nav>

    <!-- Contenido -->


    <div class="block">

        <div class="message-body">
            <article class="message">
                <div class="message-header">

                    <p>Valor 1: <?php
                                echo  htmlspecialchars($_POST['valor1'])
                                ?></p>
                    <p>Valor 2: <?php
                                echo  htmlspecialchars($_POST['valor2'])
                                ?></p>
            </article>
            <code>
                <?php
                $a = $_POST['valor1'];
                $b =  $_POST['valor2'];
                $resultado = $a == $b;
                echo "El resultado es " . var_dump($resultado);
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