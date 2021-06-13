<?php
include_once('../php/pheader.php');
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Tipos de datos</a></li>

        </ul>

    </nav>

    <!-- Titulos -->

    <div class="block">

        <h1 class="title">Unidad01</h1>

        <h2 class="subtitle">Concepto basicos: Operadores de comparacion y logicos</h2>

    </div>

    <!-- Contenido -->

    <div class="block">
        <div class="title">
            Operadores Aritmeticos
        </div>
        <code>
            <?php
            $valor =2;
            $valor2= 3;
            $resultado = $valor +$valor2;
            echo "El resultado de la suma es " .$resultado;
            ?>
        </code>

        <div class="title">
            Operadores de Comparacion
        </div>
        <code>
            <?php
            $resultado = $valor ==$valor2;
            echo "El resultado es ". var_dump($resultado);
            ?>
        </code>

        <div class="title">
            Operadores Logicos
        </div>
        <code>
            <?php
            $valor =true;
            $valor2= false;
            var_dump($valor && $valor2)
            ?>
        </code>

    </div>
 
</div>
<!-- <div class="colum is half">
    <p>
        <code> Hola mundo!!</code>
    </p> -->

<?php
include_once("../php/pfooter.php");
?>