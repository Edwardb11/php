<?php
include_once('../php/pheader.php');
include_once('../database/provincias.php');
include_once('../database/municipios.php');
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
        <h2 class="subtitle">Ciclos Repetitivos - Foreach</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label"> Operador</label>
                <div class="control">
                    <div class="select">
                        <select name="provincia_id" id="provincia_id" required>
                            <option value=" ">Selecciona un valor</option>
                            <?php
                            foreach ($provincias as $key => $value) {
                                # code...
                                echo "<option value = " . $value['provincia_id'] . ">" . $value['nombre'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
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
    if (isset($_POST['provincia_id'])) {
        $id = $_POST['provincia_id'];
        foreach ($provincias as $key => $value) {
            if ($id == $value['provincia_id']) {
                $nombreProvincia = $value['nombre'];
            }
        }

    ?>
        <div class="block">
            <article class="message">
                <div class="message-header">
                    <p>
                        La provincia seleccionada es: <?php echo $nombreProvincia ?>
                    </p>
                </div>
                <div class="message-body">
                    <table class="table is-fullwidth">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Municipio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($municipios as $key => $value) {
                                if ($id == $value['provincia_id']) {
                                    # code...
                                    echo "<tr>";
                                    echo "<td>" . $value['municipio_id'] . "</td>";
                                    echo "<td>" . $value['nombre'] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejemplo11.php';">Completar otro formulario </button>
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