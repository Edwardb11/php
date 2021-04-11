<?php
if (!empty($_GET['id'])) {
    //include_once '../php/pheader.php';
    include_once('./stylo.php');
    include_once('./conexion.php');
    include_once('./consul.php');
    $id = $_GET['id'];
    $row = ConsultarTiposTripulacion($link, $id); //resultado es igual a lo que me devuelva esa funcion

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
        <h2 class="subtitle">Base de datos - Tripulacion - Editar registros</h2>
    </div>


    <!-- Contenido -->
    <div class="block">
        <div class="columns">
            <div class="column is-12">
                <form action="tripulacion.php?opciones=UDT" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['codtribulacion'] ?>">
                    <!-- para almacenar los id que el usuario logea -->

                    <div class="field">
                        <label class="label"> Nombre </label>
                        <div class="control">
                            <input class="input" type="text" name="consultar" id="consultar" placeholder="Nombre.."
                                require value="<?php echo $row['nombre'] ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Direccion </label>
                        <div class="control">
                            <input class="input" type="text" name="direccion" id="direccion" placeholder="Cutupu..."
                                require value="<?php echo $row['direccion'] ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Telefono </label>
                        <div class="control">
                            <input class="input" type="text" name="telefono" id="telefono" placeholder="849-856-4014"
                                require value="<?php echo $row['telefeno'] ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Numero de horas</label>
                        <div class="control">
                            <input class="input" type="text" name="num_horas" id="num_horas" placeholder="Horas..."
                                require value="<?php echo $row['num_horas'] ?>">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Valor de horas </label>
                        <div class="control">
                            <input class="input" type="text" name="valor_hora" id="valor_hora" placeholder="Horas..."
                                require value="<?php echo $row['valor_hora'] ?>">
                        </div>
                    </div>


                    <div class="field is-grouped">
                        <p class="control">
                            <input class="button is-primary" type="submit" value="Guardar " name="guardarDatos">
                        </p>
                        <p class="control">
                            <a class="button is-light" href="index5.php">Regresar</a>
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