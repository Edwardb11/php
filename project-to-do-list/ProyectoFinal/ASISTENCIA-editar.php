<?php
if (!empty($_GET['id'])) {
    include_once('php/profesor.php');
    $id = $_GET['id'];
    $row = consultarEstudiante($link, $id);
    $resultado = MostrarUsuarios($link);
} else {
}
?>
<div class="column is-half ">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="inicioProfesor.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Información de los estudiantes</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Editar asistencia</h1>
        <h2 class="subtitle"></h2>
    </div>
    <br>


    <?php if (!empty($_SESSION['MensajeTexto'])) { ?>
    <div class="block">
        <div class="container">
            <div class="notification <?php echo $_SESSION['MensajeTipo'] ?>">
                <button class="delete"></button>
                <?php echo $_SESSION['MensajeTexto'] ?>
            </div>
        </div>
    </div>
    <?php
        $_SESSION['MensajeTexto'] = null;
        $_SESSION['MensajeTipo'] = null;
    }
    //session_destroy();
    ?>
    <!-- Contenido -->
    <div class="block">
        <div class="columns">
            <div class="column is-8">
                <form action="Asignar-PROFE-crud.php?accion=UDTA" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['idestudiante'] ?>">
                    <!-- para almacenar los id que el usuario logea -->
                    <div class="box">
                        <article class="media">
                            <div class="media-left">
                                <figure class="image is-64x64">
                                    <img src="src/userr.png" alt="Image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong><?php echo $row['nombre'] . ' ' . $row['apellido']  ?></strong>
                                        <small><?php echo $row['email'] ?></small>
                                </div>
                            </div>
                    </div>


                    <div class="field">
                        <label class="label"> Estados </label>
                        <div class="control">
                            <div class="select">
                                <select name="estado" id="estado">
                                    <option value="A" <?php if ($row['estado' == 'A']) {
                                                            echo "selected";
                                                        } ?>>Activo</option>
                                    <option value="I" <?php if ($row['estado' == 'I']) {
                                                            echo "selected";
                                                        } ?>>Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="field is-grouped">
                        <p class="control">
                            <input class="button is-primary" type="submit" value="Guardar" name="guardar">
                        </p>
                        <p class="control">
                            <a class="button is-light" href="infoProfesor.php">Regresar</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="column is-8">
                <figure class="image is-is-128x128">
                    <img src="src/asistencia.png  ">
                </figure>

            </div>
        </div>
    </div>
</div>
<?php
include_once 'php/pfooter.php';
?>