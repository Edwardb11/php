<?php
include_once('./consulta.php');
include_once('./ConexionDB.php');

//Este punto  luego de presionar el boton de login

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vUsuario = trim(htmlspecialchars($_POST['email']));
    $vClave = trim(htmlspecialchars($_POST['password']));

    //echo "<br>  Hola " . $vUsuario . "-" . $vClave;
    validarLogin($link, $vUsuario, $vClave);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/d58f2f3d61.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header -->
    <section class="hero is-dark">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Login
                </h1>
                <h2 class="subtitle">
                    Validar usuarios
                </h2>
            </div>
        </div>
    </section>
    <section>
        <!--Color del body-->
        <div class="hero  is-primary is is-fullheight">
            <div class="hero-body">
                <!--para que este en el medio del body -->
                <div class="container">
                    <div class="columns is-centered">
                        <!--para que este centralizado-->
                        <div class="column is-4">
                            <!--para que solo ocupe 4 espacio el formulario-->
                            <div class="card-content">
                                <div class="content">
                                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"
                                        enctype="multipart/form-data" autocomplete="off" class="box">
                                        <div class="field">
                                            <label class="label"> Correo </label>
                                            <div class="control has-icons-left">
                                                <input class="input" type="email" name="email" id="email"
                                                    placeholder="edward@gmail.com" require
                                                    value="<?php echo $row['id_usuario'] ?>">
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <label class="label">Password</label>
                                            <div class="control has-icons-left">
                                                <input class="input" type="password" name="password" id="password"
                                                    placeholder="****" require>
                                                <span class="icon is-small is-left">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <button class="button is-success" type="submit" name="ingresar"
                                                value="ingresar">Ingresar
                                            </button>
                                        </div>
                                        <div class="field">
                                            <p><strong>Para registrate pulsa </strong> <a class="button is-info"
                                                    href="./registro.php">Aqui</a></p>

                                        </div>

                                    </form>
                                </div>
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
    </section>

    <!-- para quitar el msj  -->

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