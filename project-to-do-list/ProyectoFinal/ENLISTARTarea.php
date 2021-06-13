<?php
include_once('php/profesor.php'); //resultado es igual a lo que me devuelva esa funcion
$resultadoTarea = MostrarTarea($link); // mostrar tarea
$resultado1 = MostrarTarea($link);
$resultado = MostrarUsuarios($link); //mostrar estudiantes
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="inicioProfesor.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Enlistar tareas</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Enlistar tareas</h1>
        <h2 class="subtitle"></h2>
    </div>
    <br>
    <!-- Mensaje de alerta -->
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

    <div class="block">
        <div class="columns">
            <div class="column is-12">
                <div class="table-container">
                    <table class="table is-striped ">
                        <thead>
                            <th> Titulo</th>
                            <th> Descripción</th>
                            <th> Entrega</th>
                            <th> Estado</th>
                            <th> Editar</th>
                            <th> Borrar</th>
                        </thead>
                        <tbody>
                            <?php
                            //este while va a recorrer en array me va a devolver posicion por posicion lo que 
                            //esta en la variable resultado y de la forma que lo vas hacer es mysqli
                            //es decir crear un arreglo de la forma asociativa cada posicion me lo va a retornar como una columna
                            while ($row = mysqli_fetch_array($resultadoTarea, MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td> <?php echo $row['titulo'] ?> </td>
                                <td> <?php echo $row['descripción'] ?> </td>
                                <td> <?php echo $row['fecha_entrega'] ?> </td>
                                <td> <?php if ($row['estado_tarea'] == 'A') {
                                                echo "Realizada";
                                            } else {
                                                echo "No realizada";
                                            } ?> </td>
                                <td> <a class="button is-info" data-toggle="tooltip" data-placement="top" title="Editar"
                                        name="editar"
                                        href="Editar-Asign-PROFE.php?accion=UDT&id=<?php echo $row['idtarea'] ?>">
                                        <i class="fas fa-edit"></i> </a> </td>
                                <td> <a class="button is-danger" data-toggle="tooltip" data-placement="top"
                                        title="Anular" name="anular"
                                        href="asignar-PROFE-crud.php?accion=DLT&id=<?php echo $row['idtarea'] ?>">
                                        <i class="fas fa-trash"> </i> </a> </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="column is-6">
                <figure class="image is-is-128x128">
                    <img src="src/listar.jpg  ">
                </figure>

            </div>

        </div>
    </div>
</div>


<?php
include_once('php/pfooter.php');
?>