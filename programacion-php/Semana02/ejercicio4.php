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
        <h1 class="title">Unidad 02: Ejercicio 4</h1>
        <h2 class="subtitle">Realice un formulario que permita ingresar dos valores y la operación a realizar, 
            tomando en cuenta el valor seleccionado debe imprimir en pantalla el resultado de la operación.</h2>
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
                <label class="label"> Valor 01</label>
                <div class="control">
                    <input class="input" type="number" name="valor1" id="valor1" placeholder="0">
                </div>
            </div>

            <div class="field">
                <label class="label"> Valor 02</label>
                <div class="control">
                    <input class="input" type="number" name="valor2" id="valor2" placeholder="0">
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
    ?>
        <div class="block">
            <article class="message">
                <div class="message-header">
                    <p>
                        La operacion selecionada fue: </br>
                        <?php
                        if (htmlspecialchars($_POST['operador']) == 'S') {
                            # code...
                            echo "Suma";
                            $resultado = $_POST['valor1'] + $_POST['valor2'];
                        } elseif (htmlspecialchars($_POST['operador']) == 'R') {
                            # code...
                            echo "Resta";
                            $resultado = $_POST['valor1'] - $_POST['valor2'];
                        } elseif (htmlspecialchars($_POST['operador']) == 'M') {
                            # code...
                            echo "Multiplicacion";
                            $resultado = $_POST['valor1'] * $_POST['valor2'];
                        } elseif (htmlspecialchars($_POST['operador']) == 'D') {
                            # code...
                            if ($_POST['valor2'] == 0) {
                                # code...
                                echo "Imposible dividvir entre cero";
                                $resultado = 0;
                            } else {
                                echo "Division";
                                $resultado = $_POST['valor1'] / $_POST['valor2'];
                            }

                            echo "Division";
                        } else {
                            echo "Operador no valido";
                        };
                        ?>
                    </p>
                </div>
                <div class="message-body">
                    El resultado de la operacion es <strong> <?php echo (int)($resultado) ?> </strong>
                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejercicio04.php';">Completar otro formulario </button>
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