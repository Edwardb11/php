<?php
include_once('../php/pheader.php');
?>
<div class="column is-half">

    <!-- Migas de Pan -->

    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../phpbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Operadores Logicos</a></li>

        </ul>

    </nav>

    <!-- Contenido -->


    <div class="block">
        <div class="title">
            Operadores Logicos
        </div>

        <form action="LogicoAccion.php" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label">Valor 1</label>
                <div class="control">
                    <input class="input" type="text" name="valor1" placeholder="Digite True o False">
                </div>
            </div>

            <div class="field">
                <label class="label">Valor 2</label>
                <div class="control">
                    <input class="input" type="text" name="valor2" placeholder="Digite True o False">
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
<!-- <div class="colum is half">
    <p>
        <code> Hola mundo!!</code>
    </p> -->

<?php
include_once("../php/pfooter.php");;
?>