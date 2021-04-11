<?php
if (!empty($_GET['id'])) {
    include_once('php/estudiante.php');
    $id = $_GET['id'];
    $row = ConsultarTarea($link, $id); //resultado es igual a lo que me devuelva esa funcion

} else {
}
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="inicioProfesor.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Realizar tarea</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title"><?php echo $row['titulo'] ?></h1>
        <div class="notification is-info is-light">
            <?php echo $row['descripción'] ?>
        </div>
    </div>


    <!-- Contenido -->
    <div class="block">
        <div class="columns">
            <div class="column is-12">
                <form action="ESTUDIANTE-crud.php?accion=UDT" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <h4 class="title is-4"> Estado de la entrega</h4>

                    <div> </div>
                    <input type="hidden" name="id" id="id" value="<?php echo $row['idtarea'] ?>">

                    <div class="column is-12">
                        <div class="table-container">
                            <table class="table is-striped ">
                                <thead>
                                    <th> Estado</th>
                                    <th> Fecha de entrega</th>
                                    <th> Descripción</th>

                                </thead>
                                <tbody>

                                    <tr>
                                        <td> <?php if ($row['estado_tarea'] == 'A') {
                                                    echo "Realizada";
                                                } else {
                                                    echo "No realizada";
                                                } ?> </td>

                                        <td> <?php echo $row['fecha_entrega'] ?> </td>
                                        <td> <?php echo $row['descripción'] ?> </td>


                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <br>
                    <div class="colunm is-centered file is-info has-name is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="file" name="contenido">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </span>
                                <span class="file-label">
                                    Agregar entrega
                                </span>

                        </label>
                    </div>


                    <!-- <div class="field">
                        <label class="label"> Contenido </label>
                        <div class="control">
                            <input class="input" type="text" name="Contenido1" id="Contenido1"
                                placeholder="Contenido..." require>
                        </div>
                    </div> -->
                    <!-- 
                    <div class="fiel">
                        <label class="radio">
                            <input type="radio" name="marcar">
                            Marcar tarea como realizada
                        </label>

                    </div> -->

                    <br>
                    <div class="field is-grouped">
                        <p class="control">
                            <input class="button is-primary" type="submit" value="Guardar " name="guardar">
                        </p>
                        <p class="control">
                            <a class="button is-light" href="ProgESTUDIANTE.php">Regresar</a>
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