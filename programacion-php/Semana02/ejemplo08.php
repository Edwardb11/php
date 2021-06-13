<?php
include_once('../php/pheader.php');
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../pbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Estructuras de Control</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Unidad 02:</h1>
        <h2 class="subtitle">Ciclos Repetitivos - While</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label"> Operador</label>
                <div class="control">
                    <div class="select">
                        <select name="operador" id="operador" required>
                            <option value=" ">Selecciona un valor</option>
                            <option value="S">Suma</option>
                            <option value="R">Resta</option>
                            <option value="M">Multiplicacion</option>
                            <option value="D">Division</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label"> Valor 01:</label>
                <div class="control">
                    <input class="input" type="number" name="valor1" id="valor1" placeholder="0">
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
    if (isset($_POST['valor1'])) {
        $x = $_POST['valor1'];
        $a = 1;
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
                    while ($a <= 12) {
                        # code...
                        if ($a != 10) {
                            # code...
                            echo ($x . ' por ' . $a . ' igual a ' . $x * $a . '<br>');
                        }
                        $a++;
                    }
                    ?>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejemplo08.php';">Completar otro formulario </button>
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