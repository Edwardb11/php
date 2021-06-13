<?php
include_once("../php/pheader.php");
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Operadores aritmeticos</a></li>

        </ul>

    </nav>

    <!-- Contenido -->


    <div class="block">
        <div class="title">
            Operadores aritmeticos
        </div>

        <form action="AritAccion.php" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label">Valor 1</label>
                <div class="control">
                    <input class="input" type="number" name="valor1" placeholder="Digita un numero">
                </div>
            </div>

            <div class="field">
                <label class="label">Valor 2</label>
                <div class="control">
                    <input class="input" type="number" name="valor2" placeholder="Digita un numero">
                </div>
            </div>

            <div class="field is-grouped">
                <p class="control">
                    <input class="button is-primary" type="submit">
                </p>
                <p class="control">
                    <input class="button is-light" type="reset">

                </p>
            </div>
        </form>
    </div>

</div>
\
<?php
include_once("../php/pfooter.php");
?>