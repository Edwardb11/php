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

        <h2 class="subtitle">Concepto basicos: Tipos de datos</h2>

    </div>

    <!-- Contenido -->

    <div class="block">
        <div class="title">
            Boolean
        </div>
        <code>
            <?php
            $valor = true;
            var_dump($valor);
            ?>
        </code>

        <div class="title">
            Integer
        </div>
        <code>
            <?php
            $valor = 15;
            var_dump($valor);
            ?>
        </code>

        <div class="title">
            Float
        </div>
        <code>
            <?php
            $valor = 3.14;
            var_dump($valor);
            ?>
        </code>

        <div class="title">
            Caracteres (string)
        </div>
        <code>
            <?php
            $valor = "Aprendiendo PHP";
            var_dump($valor);
            ?>
        </code>

        <div class="title">
            Arreglo (Array)
        </div>
        <code>
            <?php
            $valor = array(
                "Perro", 
                "Gato",
                "Perico", 
                "Cotorra",
                "Raton");
            var_dump($valor);
            ?>
        </code>

        <div class="title">
            Clase
        </div>
        <code>
            <?php
            class carro
            {
                function Puertas()
                {
                    echo "Cantidad de puertas 4 <br>";
                }
                function Alarma($valor)
                {
                echo "Posee Alarma :".$valor;
                }
            };
            $honda = new carro;
            $honda->puertas();
            $honda->Alarma("Si");
            ?>
        </code>
    </div>

</div>
<!-- <div class="colum is half">
    <p>
        <code> Hola mundo!!</code>
    </p> -->

<?php
include_once("../php/pfooter.php");;
?>