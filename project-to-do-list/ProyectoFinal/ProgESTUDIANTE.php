<?php
include_once('php/estudiante.php');
$resultado = MostrarUsuarios($link);
$id = $row['idestudiante'];

$resultadoTarea = MostrarTareaEstudianteID($link, $id); // mostrar tarea
// COMENTADA $resultado = ConsultarTarea($link, $id); // mostrar tarea
?>
<?php
//include_once('php/estudiante.php');
//$resultadoTarea = MostrarTarea($link); // mostrar tarea
// COMENTADA $resultado = ConsultarTarea($link, $id); // mostrar tarea
?>
<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="descripcion.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Tareas pendientes</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Tareas pendientes</h1>
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
            <div class="column is-12 ">
                <div class="table-container">
                    <table class="table is-striped ">
                        <thead>
                            <th> Titulo</th>
                            <th> Descripción</th>
                            <th> Entrega</th>
                            <th> Estado</th>
                            <th> Realizar tarea</th>

                        </thead>
                        <tbody>
                            <?php
                            //este while va a recorrer en array me va a devolver posicion por posicion lo que 
                            //esta en la variable resultado y de la forma que lo vas hacer es mysqli
                            //es decir crear un arreglo de la forma asociativa cada posicion me lo va a retornar como una columna
                            while ($row1 = mysqli_fetch_array($resultadoTarea, MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td> <?php echo $row1['titulo'] ?> </td>
                                <td> <?php echo $row1['descripción'] ?> </td>
                                <td> <?php echo $row1['fecha_entrega'] ?> </td>
                                <td> <?php if ($row1['estado_tarea'] == 'A') {
                                                echo "Realizada";
                                            } else {
                                                echo "No realizada";
                                            } ?> </td>
                                <td> <a class="button is-info" data-toggle="tooltip" data-placement="top" title="Editar"
                                        name="editar"
                                        href="Hacer-Tarea-Student.php?accion=UDT&id=<?php echo $row1['idtarea'] ?>">
                                        <i class="fas fa-edit"></i> </a> </td>

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