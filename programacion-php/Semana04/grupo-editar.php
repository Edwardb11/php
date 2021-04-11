<?php
if (!empty($_GET['id'])) {
    include_once '../php/pheader.php';
    $id = $_GET['id'];
    $row = ConsultarTipos($link, $id); //resultado es igual a lo que me devuelva esa funcion

} else {
}
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../pbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Unidad 04: Base de datos</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Unidad 04:</h1>
        <h2 class="subtitle">Base de datos - Mantenimiento de tipos de usuarios - Editar registros</h2>
    </div>


    <!-- Contenido -->
    <div class="block">
        <div class="columns">
            <div class="column is-12">
                <form action="grupo-crud.php?accion=UDT" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['grupoid'] ?>">
                    <!-- para almacenar los id que el usuario logea -->
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
                    <div class="field">
                        <label class="label"> Descripcion </label>
                        <div class="control">
                            <input class="input" type="text" name="descripcion" id="descripcion"
                                placeholder="Descripcion" require value="<?php echo $row['descripcion'] ?>">
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <p class="control">
                            <input class="button is-primary" type="submit" value="Guardar " name="guardar">
                        </p>
                        <p class="control">
                            <a class="button is-light" href="grupo-mant.php">Regresar</a>
                        </p>
                    </div>
                </form>
            </div>


        </div>

    </div>
</div>

<?php
include_once '../php/pfooter.php';
?>