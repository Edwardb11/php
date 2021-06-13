<?php
include_once('php/profesor.php'); //resultado es igual a lo que me devuelva esa funcion
$resultadoUsuario = MostrarUsuarios($link);
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
        <h1 class="title">Información de los estudiante</h1>
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
    <div class="block">
        <div class="columns">
            <div class="column is-12">
                <div class="table-container">
                    <table class="table is-striped ">
                        <thead>
                            <th> Nombre</th>
                            <th> Apellido</th>
                            <th> Email</th>
                            <th> Estado</th>
                            <th> Editar estado</th>

                        </thead>
                        <tbody>

                            <?php
                            //este while va a recorrer en array me va a devolver posicion por posicion lo que 
                            //esta en la variable resultado y de la forma que lo vas hacer es mysqli
                            //es decir crear un arreglo de la forma asociativa cada posicion me lo va a retornar como una columna
                            while ($row = mysqli_fetch_array($resultadoUsuario, MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td> <?php echo $row['nombre'] ?> </td>
                                <td> <?php echo $row['apellido'] ?> </td>
                                <td> <?php echo $row['email'] ?> </td>
                                <td> <?php if ($row['estado'] == 'A') {
                                                echo "Activo";
                                            } else {
                                                echo "Inactivo";
                                            } ?> </td>
                                <td> <a class="button is-info" data-toggle="tooltip" data-placement="top" title="Editar"
                                        name="editar"
                                        href="ASISTENCIA-editar.php?accion=UDTA&id=<?php echo $row['idestudiante'] ?>">
                                        <i class="fas fa-edit"></i> </a> </td>

                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="column is-4">
                <figure class="image is-is-128x128">
                    <img src="src/estudiante.jpg  ">
                </figure>

            </div>
        </div>
    </div>
</div>


<?php
include_once('php/pfooter.php');
?>