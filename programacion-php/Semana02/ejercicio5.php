<?php
include_once('../php/pheader.php');
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../pbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Unidad 02: Ejercicios</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Unidad 02: Ejercicio 5</h1>
        <h2 class="subtitle">Realiza un formulario que permita identificar el monto a pagar 
            de ITBIS, tomando en cuenta que el total ingresado, la formula debe permitir 
            seleccionar entre tres tipos de ITBS:
            <br>a. 0% No lleva ITBIS
            <br>b. 16% de ITBIS
            <br>c. 18% de ITBIS </h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label"> Monto a pagar de ITBIS</label>
                <div class="control">
                    <div class="select">
                        <select name="operador" id="operador" required>
                            <option value=" ">Selecciona un valor</option>
                            <option value="1">0% No lleva ITBIS</option>
                            <option value="2">16% de ITBIS </option>
                            <option value="3">18% de ITBIS</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label"> Monto a pagar:</label>
                <div class="control">
                    <input class="input" type="number" name="monto" id="monto" placeholder="0">
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

    <?php
    // isset() 
    if (isset($_POST['operador'])) {
        $Monto = $_POST['monto'];
        // $a = 1;
    ?>
        <div class="block">
            <article class="message">
                <div class="message-header">
                    <p>
                        El resultado es:
                        
                    </p>
                </div>
                <div class="message-body">
                    <?php
                   if (htmlspecialchars($_POST['operador']) == 1) {
                    echo "$Monto";
                   }
                   elseif(htmlspecialchars($_POST['operador']) == 2) {
                    $interes=($Monto+16);
                    echo "$interes";
                   }
                   elseif(htmlspecialchars($_POST['operador']) == 3) {
                    $interes=($Monto+18);
                    echo "$interes";
                   }
                   else {
                    echo "Por favor elegir el monto a pagar de ITBIS";
                   }
                 #$SueldoReal = $SalarioTrabajador – (($SalarioTrabajador /100) * $Impuesto);
                    ?>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejercicio5.php';">Completar otro formulario </button>
                        </p>
                    </div>
                </div>
            </article>
        </div>
    <?php } ?>

</div>





<?php
include_once('../php/pfooter.php');
?>