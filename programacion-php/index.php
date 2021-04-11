<?php
include_once ('php/consultas.php');
include_once ('php/conexiondb.php');

//Este punto  luego de presionar el boton de login

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vUsuario = trim(htmlspecialchars($_POST['username']));
    $vClave = trim(htmlspecialchars($_POST['password']));

    //echo "<br>  Hola ". $vUsuario . "-". $vClave;
    validarLogin($link, $vUsuario, $vClave);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"> -->
    <!-- Style Bulma -->
    <link rel="stylesheet" href="bulma/css/bulma.min.css">

    <!-- Font Awesone -->
    <link rel="stylesheet" href="../library/fontawesome/css/all.min.css">

    <title>Ucateci Programación 2</title>

    <style>
        .login-container {
            margin-top: 5%;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <section class="hero is-dark">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Clase de Programación 2
                </h1>
                <h2 class="subtitle">
                    P1-2021
                </h2>
            </div>
        </div>
    </section>

    <section>
        <div class="columns is-mobile">
            <!-- esto es para que se apdate a movil responsive -->
            <div class="column is-8-fullhd">
                <figure class="image is-2by1">
                    <img src="IMG/login.jpg" alt="Login">
                </figure>
            </div>

            <div class="column is-4-fullhd login-container">
                <div class="card">
                    <div class="card-image">
                        <br>
                        <div class="columns is-flex is-centered">
                            <figure class="image is-128x128">
                                <img src="IMG/icono.png" alt="php">
                            </figure>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" autocomplete="off">
                                <div class="field">
                                    <label class="label">Usuario</label>
                                    <div class="control">
                                        <input class="input" type="email" id="username" name="username" placeholder="e.g. alexsmith@gmail.com" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Contraseña</label>
                                    <div class="control">
                                        <input class="input" type="password" id="password" name="password" placeholder="Contraseña" required>
                                    </div>
                                </div>
                                <div class="field">
                                    <button class="button is-success" type="submit" name="ingresar" value="ingresar">Ingresar </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Este punto solo mostrara si existe la session -->
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
    </section>

    <section>
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>Hecho con <i class="fas fa-mug-hot"></i> & <i class="fas fa-laptop-code"></i> por </strong> <a href="https://mangusoft.com">Mangusoft SRL</a>
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

</body>

</html>