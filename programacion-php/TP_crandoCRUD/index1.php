<?php
//include_once('../php/pheader.php');
include_once('./stylo.php');
include_once('./conexion.php');
include_once('./consul.php');
$resultado = MostrarTipoMant($link); //resultado es igual a lo que me devuelva esa funcion
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
        <h2 class="subtitle">Tipo_mantenimiento</h2>
    </div>

    <!-- Mensaje de alerta -->

    <?php if (!empty($_SESSION['mensajeTexto'])) { ?>
    <div class="block">
        <div class="container">
            <div class="notification <?php echo $_SESSION['mensajeTipo'] ?>">
                <button class="delete"></button>
                <?php echo $_SESSION['mensajeTexto'] ?>
            </div>
        </div>
    </div>
    <?php
        $_SESSION['mensajeTexto'] = null;
        $_SESSION['mensajeTipo'] = null;
    }
    //session_destroy();
    ?>

    <!-- Contenido -->
    <div class="block">
        <div class="columns">
            <div class="column is-5">
                <form action="Tipo_mant.php?opciones=INS" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <div class="field">
                        <label class="label"> Descripcion </label>
                        <div class="control">
                            <input class="input" type="text" name="consultar" id="consultar" placeholder="Descripcion"
                                require>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Comentario </label>
                        <div class="control">
                            <input class="input" type="text" name="comentario" id="comentario" placeholder="Comentario"
                                require>
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
                    <div class="field is-grouped">
                        <p class="control">
                            <input class="button is-primary" type="submit" value="Guardar " name="guardarDatos">
                        </p>
                        <p class="control">
                            <input class="button is-light" type="reset">
                        </p>
                    </div>
                </form>
            </div>
            <div class="column is-10">
                <div class="table-container">
                    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                        <thead>
                            <th> Descripcion</th>
                            <th> Comentario</th>
                            <th> Estado</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </thead>
                        <tbody>
                            <?php
                            //este while va a recorrer en array me va a devolver posicion por posicion lo que 
                            //esta en la variable resultado y de la forma que lo vas hacer es mysqli
                            //es decir crear un arreglo de la forma asociativa cada posicion me lo va a retornar como una columna
                            while ($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td> <?php echo $row['descripcion'] ?> </td>
                                <td> <?php echo $row['comentario'] ?> </td>
                                <td> <?php if ($row['estado'] == 'A') {
                                                echo "Activo";
                                            } else {
                                                echo "Inactivo"; #
                                            } ?> </td>
                                <td> <a class="button is-info" data-toggle="tooltip" data-placement="top" title="Editar"
                                        name="editar"
                                        href="index1Editar.php?opciones=UDT&id=<?php echo $row['codtipo_mant'] ?>"> <i
                                            class="
                                        fas fa-edit"></i> </a> </td>
                                <td> <a class="button is-danger" data-toggle="tooltip" data-placement="top"
                                        title="Anular" name="anular"
                                        href="Tipo_mant.php?opciones=DLT&id=<?php echo $row['codtipo_mant'] ?>"> <i
                                            class="fas fa-trash"> </i> </a> </td>

                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>

<?php
include_once '../php/pfooter.php';
?>