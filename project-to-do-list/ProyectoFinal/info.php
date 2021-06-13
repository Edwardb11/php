<?php
include_once('php/estudiante.php'); //resultado es igual a lo que me devuelva esa funcion
$resultadoUsuario = MostrarUsuarios($link);
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="descripcion.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Información del estudiante</a></a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Información del estudiante</h1>
        <h2 class="subtitle"></h2>
    </div>
    <br>
    <!-- Mensaje de alerta -->
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
                        </thead>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['nombre'] ?> </td>
                                <td> <?php echo $row['apellido'] ?> </td>
                                <td> <?php echo $row['email'] ?> </td>
                                <td> <?php if ($row['estado'] == 'A') {
                                            echo "Activo";
                                        } else {
                                            echo "Inactivo";
                                        } ?>
                            </tr>
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