<?php
include_once('../php/pheader.php');
?>

<div class="column is-half">
    <!-- Migas de Pan -->
    <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
            <li><a href="../pbody.php">Inicio</a></li>
            <li class="is-active"><a href="#" aria-current="page">Unidad 03: Funciones</a></li>
        </ul>
    </nav>
    <!-- Titulos -->
    <div class="block">
        <h1 class="title">Unidad 03:</h1>
        <h2 class="subtitle">Funciones</h2>
    </div>
    <!-- Contenido -->
    <div class="block">
        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="field">
                <label class="label"> Usuario</label>
                <div class="control">
                    <input class="input" type="text" name="user" id="user" placeholder="Usuario" require>
                </div>
            </div>

            <div class="field">
                <label class="label"> Contraseña</label>
                <div class="control">
                    <input class="input" type="password" name="pass" id="pass" placeholder="Contraseña" require>
                </div>
            </div>

            <div class="field is-grouped">
                <p class="control">
                    <input class="button is-primary" type="submit">
                </p>
                <p class="control">
                    <input class="button is-light" type="reset">
                </p>
            </div>

        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $vUsuario = $_POST['user'];
        $vClave = $_POST['pass'];
    ?>
        <div class="block">
            <article class="message">
                <div class="message-header">
                    <p>
                        El resultado es:
                    </p>
                </div>
                <div class="message-body">
                    <?php
                    function fValidar($usuario = null, $clave = null)
                    {
                        if ($usuario == 'usuario' and $clave == '123') {
                            return True;
                        } else {
                            return False;
                        }
                    }

                    if (fValidar($vUsuario, $vClave)) {
                    ?>
                        <div class="notification is-success">
                            <button class="delete"></button>
                            Usuario correcto, Bienvenido....
                        </div>
                    <?php
                    } else { ?>
                        <div class="notification is-danger">
                            <button class="delete"></button>
                            Usuario incorrecto....
                        </div>
                    <?php
                    }
                    ?>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-link" type="cancel" onclick="javascript:window.location='ejemplo12.php';">Completar otro formulario </button>
                        </p>
                    </div>
                </div>
            </article>
        </div>
    <?php } ?>

</div>





<?php
include_once('../php/pfooter.php');
?>