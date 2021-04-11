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
        <h2 class="subtitle">Estructuras de Control: Condicionales - Simples y Compuestas</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label"> Genero</label>
                <div class="control">
                    <div class="select">
                        <select name="genero" id="genero" required>
                            <option value=" ">Selecciona un valor</option>
                            <option value="M">Señor</option>
                            <option value="F">Señora</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label"> Nombre</label>
                <div class="control">
                    <input class="input" type="text" name="nombre" id="nombre" placeholder=" e.j. David Jose">
                </div>
            </div>

            <div class="field">
                <label class="label"> Edad</label>
                <div class="control">
                    <input class="input" type="number" name="edad" id="edad" min="0" placeholder="17">
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
    if (isset($_POST['nombre'])) {
    ?>
        <div class="block">
            <article class="message">
                <div class="message-header">
                    <p>
                        <!-- Condicionales Compuestas -->
                        <?php
                        if ($_POST['genero'] == 'M') {
                            # code...
                            echo "Saludos Sr. " . htmlspecialchars($_POST['nombre']);
                        } else {
                            # code...
                            echo "Saludos Sra. " . htmlspecialchars($_POST['nombre']);
                        }

                        ?>

                    </p>
                </div>
                <div class="message-body">
                    Su edad es <strong> <?php echo (int)($_POST['edad']) ?> </strong>
                    <?php
                    $edad = (int)($_POST['edad']);
                    if ($edad >= 18) {
                        # code...
                        echo "Eres mayor de edad";
                    } else {
                        # code...
                        echo "Eres menor de edad";
                    }
                    ?>
                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejemplo05.php';">Completar otro formulario </button>
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