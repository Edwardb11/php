<?php
include_once('../php/pheader.php');
include_once('ArrayDIAS.php')
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
        <h1 class="title">Unidad 02: Ejercicio 3</h1>
        <h2 class="subtitle">Realice un programa que tomando en cuenta un array que contenga
            los días de la semana, busque e imprima el día según
            el valor ingresado por el teclado, el formulario solo debe aceptar valores entre 0 y 6”</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="field">
                <label class="label">Dia</label>
                <div class="control">
                    <input class="input" type="number" name="dia1" id="dia1" min="0" max="6" placeholder="Ej: 0">
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
    if (isset($_POST['dia1'])) {
        $InputDia = $_POST['dia1'];
  
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
                    if ($InputDia >= 0 && $InputDia <= 7) {
                        foreach ($dias as $key => $value) {
                            if ($InputDia== $key) {
                                echo ($value['dia']);
                            }
                        }
                    }
                    ?>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejercicio3.php';">Completar otro formulario </button>
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