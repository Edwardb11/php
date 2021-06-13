<?php
//include_once('../php/pheader.php');
include_once('./stylo.php');
include_once('./conexion.php');
include_once('./consul.php');
$resultado = MostrarTripulacion($link); //resultado es igual a lo que me devuelva esa funcion
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
        <h2 class="subtitle">TP - Tripulacion</h2>
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
                <form action="tripulacion.php?opciones=INS" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    <div class="field">
                        <label class="label"> Nombre </label>
                        <div class="control">
                            <input class="input" type="text" name="consultar" id="consultar" placeholder="Nombre..."
                                require>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Direccion</label>
                        <div class="control">
                            <input class="input" type="text" name="direccion" id="direccion"
                                placeholder="Republica Dominicana..." require>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Telefono</label>
                        <div class="control">
                            <input class="input" type="text" name="telefono" id="telefono" placeholder="849-856-4014..."
                                require>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Numero de horas</label>
                        <div class="control">
                            <input class="input" type="text" name="num_horas" id="num_horas" placeholder="Horas..."
                                require>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label"> Valor de horas </label>
                        <div class="control">
                            <input class="input" type="text" name="valor_hora" id="valor_hora" placeholder="Horas..."
                                require>
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
                            <th> Nombre</th>
                            <th> Direccion</th>
                            <th> Telefono</th>
                            <th> Numeros de horas</th>
                            <th> Valor de horas</th>
                            <th> Editar</th>
                            <th> Borrar</th>


                        </thead>
                        <tbody>
                            <?php
                            //este while va a recorrer en array me va a devolver posicion por posicion lo que 
                            //esta en la variable resultado y de la forma que lo vas hacer es mysqli
                            //es decir crear un arreglo de la forma asociativa cada posicion me lo va a retornar como una columna
                            while ($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td> <?php echo $row['nombre'] ?> </td>
                                <td> <?php echo $row['direccion'] ?> </td>
                                <td> <?php echo $row['telefeno'] ?> </td>
                                <td> <?php echo $row['num_horas'] ?> </td>
                                <td> <?php echo $row['valor_hora'] ?> </td>


                                <td> <a class="button is-info" data-toggle="tooltip" data-placement="top" title="Editar"
                                        name="editar"
                                        href="index5Editar.php?opciones=UDT&id=<?php echo $row['codtribulacion'] ?>"> <i
                                            class="
                                        fas fa-edit"></i> </a> </td>
                                <td> <a class="button is-danger" data-toggle="tooltip" data-placement="top"
                                        title="Anular" name="anular"
                                        href="tripulacion.php?opciones=DLT&id=<?php echo $row['codtribulacion'] ?>"> <i
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