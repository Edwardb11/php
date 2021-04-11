<?php
//SELECT AES_ENCRYPT(`password`, '123456') FROM estudiante

include_once('php/consultas.php');
include_once('php/conexionDB.php');
//Este punto  luego de presionar el boton de login

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vUsuario = trim(htmlspecialchars($_POST['username']));
    $vClave = trim(htmlspecialchars($_POST['password']));
    $vTipo = trim(htmlspecialchars($_POST['tipo']));

    //echo "<br>  Hola " . $vUsuario . "-" . $vClave;
    validarLogin($link, $vUsuario, $vClave, $vTipo);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <!-- bulma -->
    <link rel="stylesheet" href="bulma/css/bulma.min.css">
    <!-- Font Awesone -->
    <script src="https://kit.fontawesome.com/d58f2f3d61.js" crossorigin="anonymous"></script>
    <style>
    .IMG {
        background-image: url("./src/5.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body>
    <!-- Header -->
    <section class="hero is-dark">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    TO DO LIST
                </h1>
                <h2 class="subtitle">
                    login
                </h2>
            </div>
        </div>
    </section>
    <section>
        <!--Color del body-->
        <div class="hero is-fullheight IMG">
            <div class="hero-body">
                <!--para que este en el medio del body -->
                <div class="container">
                    <div class="columns is-centered">
                        <!--para que este centralizado-->
                        <div class="column is-4">
                            <!--para que solo ocupe 4 espacio el formulario-->

                            <div class="content">
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"
                                    enctype="multipart/form-data" autocomplete="off" class="box">

                                    <div class="columns is-centered">
                                        <h1 class="py-2 title-dark is-4  is-uppercase ">Iniciar Sesión</h1>
                                    </div>
                                    <div class="field">
                                        <label class="label"> Correo electrónico</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="email" name="username" id="username"
                                                placeholder="edward@gmail.com" require>
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Contraseña</label>
                                        <div class="control has-icons-left">
                                            <input class="input" type="password" name="password" id="password"
                                                placeholder="****" require>
                                            <span class="icon is-small is-left">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label">Tipo de usuario</label>
                                        <div class="control">
                                            <div class="select">
                                                <select name="tipo">
                                                    <option>Estudiante</option>
                                                    <option>Profesor</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <button class="button is-dark is-fullwidth has-text-weight-bold is-uppercase "
                                            type="submit" name="ingresar" value="ingresar">
                                            <span>Iniciar Sesión</span>
                                            <span class="icon is-small"></span>
                                            <i class="fas fa-sign-in-alt"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <?php if (isset($_SESSION['MensajeTexto'])) { ?>
                            <footer class="card-footer">
                                <div class="container">
                                    <div class="notification <?php echo $_SESSION['MensajeTipo'] ?>">
                                        <button class="delete"></button>
                                        <?php echo $_SESSION['MensajeTexto'] ?>
                                    </div>
                                </div>
                            </footer>
                            <?php }
                            //session_destroy();
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>Hecho con <i class="fas fa-pizza-slice"></i> & <i class="fas fa-laptop-code"></i>
                        por
                    </strong>
                    <a href="https://www.facebook.com/EdwardBritoDiaz/">Edward Brito Diaz</a>
                </p>
            </div>
        </footer>
    </section>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
            const $notification = $delete.parentNode;

            $delete.addEventListener('click', () => {
                $notification.parentNode.removeChild($notification);
            });
        });
    });
    </script>


</html>