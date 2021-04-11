<?php
include_once('./consulta.php');
include_once('./ConexionDB.php');


if (isset($_SESSION['id_usuario'])) {
    $vUsuario = $_SESSION['id_usuario'];
    $row = consultarUsuarios($link, $vUsuario);
} else {
    $_SESSION['MensajeTexto'] = "Error acceso al sistema  no registrado.";
    $_SESSION['MensajeTipo'] = "is-danger";

    header("Location: ./index.php");
    //echo"<script language='javascript'>window.location='../index.php'</script>;";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de inicio</title>
    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/d58f2f3d61.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="navbar-end">
        <div class="navbar-item">
            <div class="field is-grouped">
                <p class="control">
                    <a class="button is-light" href="#">
                        <span class="icon">
                            <i class="fas fa-user"></i>
                        </span>
                        <span>
                            Bienvenido: <?php echo utf8_decode($row['nombre']); ?>
                        </span>
                    </a>
                    <a class="button is-success" href="./cerrar.php">
                        <span class="icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span>Cerrar sesión</span>
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Header -->
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Tarea de validar login
                </h1>
                <h2 class="subtitle">
                    2019-0823
                </h2>
            </div>
        </div>
    </section>
    <!-- Relleno -->
    <section>
        <figure class="image is-2by1">
            <img src="./img/pro.jpg">
        </figure>
    </section>
</body>

</html>