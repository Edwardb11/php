<?php
if (!empty($_GET['id'])) {
    include_once('php/profesor.php');
    $id = $_GET['id'];
    $row = ConsultarTarea($link, $id); //resultado es igual a lo que me devuelva esa funcion
    $resultado1 = MostrarUsuarios($link);
} else {
}
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="inicioProfesor.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Editar tarea</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Asignacion de tarea</h1>
        <h2 class="subtitle"> Editar registros de tarea </h2>
    </div>


    <!-- Contenido -->
    <div class="block">
        <div class="columns">
            <div class="column is-12">
                <form action="Asignar-PROFE-crud.php?accion=UDT" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['idtarea'] ?>">
                    <!-- para almacenar los id que el usuario logea -->

                    <div class="field">
                        <label class="label"> Estudiante </label>
                        <div class="control">
                            <div class="select">
                                <select name="estudiante" id="estudiante" require>
                                    <?php while ($row1 = mysqli_fetch_array($resultado1, MYSQLI_ASSOC)) {
                                        echo "<option value = " . $row1['idestudiante'] . ">" . $row1['nombre'] . "</option>";
                                    }   ?>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Título</label>
                        <div class="control">
                            <input class="input" type="text" name="titulo" id="titulo" placeholder="Titulo..." require
                                value="<?php echo $row['titulo'] ?>">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label"> Descripción </label>
                        <div class="control">
                            <input class="input" type="text" name="descripcion" id="descripcion"
                                placeholder="Contenido..." require value="<?php echo $row['descripción'] ?>">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label"> Fecha de entrega </label>
                        <div class="control">
                            <input class="input" type="date" name="fecha" id="fecha" placeholder="2021/01/22" require
                                value="<?php echo $row['fecha_entrega'] ?>">
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <p class="control">
                            <input class="button is-primary" type="submit" value="Guardar " name="guardar">
                        </p>
                        <p class="control">
                            <a class="button is-light" href="asignarTarea.php">Regresar</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'php/pfooter.php';
?>