<?php
function validarLogin($link, $user, $pass)
{
    //$query = "SELECT * FROM `usuario` WHERE `email` = '$user' AND `password` = '$pass' AND `estado` = 'A'";

    $query = "SELECT * FROM `usuario` WHERE `email` = '$user' AND `estado` = 'A'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        # code...
        $row = $resultado->fetch_assoc();
        $_SESSION['userid'] = $row['userid'];
        // See the password_hash() example to see where this came from.
        $hash = $row['password']; //se alamecena el valor encriptado de la base de datos

        if (password_verify($pass, $hash)) //verifico que el valor encriptado se igual a la contraseña que me estan pasando si e sverdad creo las secciones
        {
            //echo 'Password is valid!';
            $_SESSION['MensajeTexto'] = null;
            $_SESSION['MensajeTipo'] = null;
            header("Location: phpbody.php");
            //$_SESSION['MensajeTexto'] ="Felicidades"; //FUnciona bien
            //$_SESSION['MensajeTipo'] = "is-succes"; //FUnciona bien
        } else {
            //echo 'Invalid password.';
            $_SESSION['MensajeTexto'] = "Error validando datos de usuario";
            $_SESSION['MensajeTipo'] = "is-danger";
        }
    } else {
        # code...
        $_SESSION['MensajeTexto'] = "Error validando datos de usuario";
        $_SESSION['MensajeTipo'] = "is-danger";
    }
}

function consultarUsuarios($link, $id)
{
    $query = "SELECT * FROM `usuario` WHERE `userid` = '$id' AND `estado` = 'A' ";
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
        //echo"<script language='javascript'>window.location='../index.php'</script>;";
    }
}

function MostrarTipos($link)
{
    $query = "SELECT * FROM `grupo` ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}
function ConsultarTipos($link, $id)
{
    $query = "SELECT * FROM `grupo` WHERE `grupoid` =  '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        # code...
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        # code...
        $_SESSION['MensajeTexto'] = "Error consultando datos";
        $_SESSION['MensajeTipo'] = "is-danger";
    }
}

function MostrarUsuarios($link)
{
    $query = "SELECT * FROM `usuario` ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}


function ConsultarTiposUSUARIO($link, $id)
{
    $query = "SELECT * FROM `usuario` WHERE `userid` =  '$id'";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        # code...
        $row = mysqli_fetch_array($resultado);
        return $row;
    } else {
        # code...
        $_SESSION['MensajeTexto'] = "Error consultando datos";
        $_SESSION['MensajeTipo'] = "is-danger";
    }
}