<?php
include_once('../php/pheader.php')
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Operadores de incrementar descrementar</a></li>

        </ul>

    </nav>

    <!-- Contenido -->


    <div class="block">

        <div class="message-body">
        <article class="message">
            <div class="message-header">
                
                <p>Valor 1: <?php 
                echo  $_POST['valor1']
                ?></p>
                <p>Valor 2: <?php 
                echo  $_POST['valor2']
                ?></p>
        </article>
            <code>
                <?php
                $a= $_POST['valor1'];
                $b= $_POST['valor2'];
                $a++;
                $b--;
                echo "El resultado incrementando es: ".$a;  
                echo "  y descrementando es: ".$b;
                ?>
            </code>
        
        </div>


    </div>

</div>


<?php
include_once("../php/pfooter.php");
?>