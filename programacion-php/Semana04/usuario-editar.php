<?php
if (!empty($_GET['id'])) {
    include_once '../php/pheader.php';
    $id = $_GET['id'];
    $resultado = MostrarTipos($link);
    $row = ConsultarTiposUSUARIO($link, $id); //resultado es igual a lo que me devuelva esa funcion
    $row1 = ConsultarTipos($link, $id); //resultado es igual a lo que me devuelva esa funcion
    //resultado es igual a lo que me devuelva esa funcion

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
        <h2 class="subtitle">Base de datos - Mantenimiento de tipos de usuarios - Editar registros de usuarios </h2>
    </div>


    <!-- Contenido -->
    <div class="block">
        <div class="columns">
            <div class="column is-8">
                <form action="usuarios-crud.php?accion=UDT" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['userid'] ?>">
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
                        <label class="label"> Tipo de usuario </label>
                        <div class="control">
                            <div class="select">
                                <select name="tipo" id="tipo" require>
                                    <?php while ($row1 = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
                                        echo "<option value = " . $row1['grupoid'] . ">" . $row1['descripcion'] . "</option>";
                                    }   ?>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label"> Usuario </label>
                        <div class="control">
                            <input class="input" type="text" name="username" id="username" placeholder="Descripcion"
                                require value="<?php echo $row['username'] ?>">
                        </div>

                        <label class="label"> Correo </label>
                        <div class="control">
                            <input class="input" type="email" name="email" id="email" placeholder="edward@gmail.com"
                                require value="<?php echo $row['email'] ?>">
                        </div>

                        <label class="label"> Contraseña </label>
                        <div class="control">
                            <input class="input" type="text" name="password" id="password" placeholder="***" require
                                value="<?php echo $row['password'] ?>">
                        </div>

                    </div>

                    <div class="field is-grouped">
                        <p class="control">
                            <input class="button is-primary" type="submit" value="Guardar " name="guardar">
                        </p>
                        <p class="control">
                            <a class="button is-light" href="usuarios-mant.php">Regresar</a>
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