<?php
include_once('../php/pheader.php');
include_once('funciones02.php');

?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../pbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Unidad 03: Funciones</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Unidad 03:</h1>
        <h2 class="subtitle">Funciones</h2>
    </div>
    <!-- Contenido -->
    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['user']) and isset($_POST['pass'])) {
        $vUsuario = $_POST['user'];
        $vClave = $_POST['pass'];
        // } else {
        //     $vUsuario = null;
        //     $vClave = null;
        // }

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
                    if (fValidar($vUsuario, $vClave)) {
                    ?>
                        <div class="notification is-success">
                            <button class="delete"></button>
                            Usuario correcto, Bienvenido....
                        </div>
                    <?php
                    } else { ?>
                        <div class="notification is-danger">
                            <button class="delete"></button>
                            Usuario incorrecto....
                        </div>
                    <?php
                    }
                    ?>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejemplo13.php';">Completar otro formulario </button>
                        </p>
                    </div>
                </div>
            </article>
        </div>
    <?php } else {
        echo "<script language='javascript'>window.location = 'ejemplo13.php'</script>;";
    } ?>

</div>

<?php
include_once('../php/pfooter.php');
?>