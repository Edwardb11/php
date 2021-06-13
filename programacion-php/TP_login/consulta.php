<?php
function validarLogin($link, $user, $pass)
{
    //$query = "SELECT * FROM `usuarios` WHERE `correo` = '$user' AND `clave` = '$pass' "; Funciona cuando no encripto la clave
    $query = "SELECT * FROM `usuarios` WHERE `correo` = '$user' ";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        # code...
        $row = $resultado->fetch_assoc();
        $_SESSION['id_usuario'] = $row['id_usuario'];
        $hash = $row['clave']; //se alamecena el valor encriptado de la base de datos
        if (password_verify($pass, $hash)) //verifico que el valor encriptado se igual a la contraseña que me estan pasando si e sverdad creo las secciones
        {
            //echo 'Password is valid!';
            $_SESSION['MensajeTexto'] = null;
            $_SESSION['MensajeTipo'] = null;
            header("Location: ./pagina.php");
        } else {
            //echo 'Invalid password.';
            $_SESSION['MensajeTexto'] = "Error validando datos de usuario";
            $_SESSION['MensajeTipo'] = "is-danger";
        }
    } else {
        # code...
        $_SESSION['MensajeTexto'] = "Error validando datos de usuario aa";
        $_SESSION['MensajeTipo'] = "is-danger";
    }
}

function consultarUsuarios($link, $id)
{
    $query = "SELECT * FROM `usuarios` WHERE `id_usuario` = '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        # code...
        $row = $resultado->fetch_assoc();
        return $row;
    } else {
        # code...

        $_SESSION['MensajeTexto'] = "Error validando datos de usuario";
        $_SESSION['MensajeTipo'] = "is-danger";
        header("Location: ../index.php");
    }
}