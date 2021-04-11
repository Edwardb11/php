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
        <h1 class="title">Unidad 02: Ejercicio 7</h1>
        <h2 class="subtitle">Modificar el programa anterior ahora utilizando el ciclo while</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label">Valor 01 </label>
                <div class="control">
                    <input class="input" type="number" name="valor1" id="valor1" min="0" placeholder="0">
                </div>
            </div>
            <label class="label">Valor 02 </label>
            <div class="control">
                <input class="input" type="number" name="valor2" id="valor2" min="valor1" placeholder="0">
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
if (isset($_POST['valor1']) && isset($_POST['valor2'])) {
    $x = $_POST['valor1'];
    $i = $_POST['valor2'];

?>
    <div class="block">
        <article class="message">
            <div class="message-header">
                <p>
                    El resultado es:
                </p>
            </div>
            <div class="message-body">
                <table class="table is-bordered">
                    <thead>
                        <tr>
                            <th>Numeros impares</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n=$x;
                        while ($n <= $i) {
                            if ($n % 2 != 0) {
                                echo "<tr>";
                                #echo $n . '<br>';
                                echo "<td>" . $n . "</td>";
                                echo "</tr>"; 
                            }
                            $n++;
                        }
                        
                        ?>
                    </tbody>
                </table>

                <div class="field is-grouped">
                    <p class="control">
                        <button class="button is-link" type="cancel" onclick="javascript:window.location='ejercicio7.php';">Completar otro formulario </button>
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