<?php
function validarLogin($link, $user, $pass, $tipo)
{
    if ($tipo == "Estudiante") {
        $query = "SELECT * FROM `estudiante` WHERE `email` = '$user' AND `password` = '$pass' AND `estado`='A'";
        //$query = "SELECT * FROM `estudiante` WHERE `email` = '$user' AND `estado` = 'A'";
        $resultado = mysqli_query($link, $query);

        if (mysqli_num_rows($resultado) == 1) {
            # code...
            $row = $resultado->fetch_assoc();
            $_SESSION['idestudiante'] = $row['idestudiante'];
            // See the password_hash() example to see where this came from.
            //$hash = $row['password']; //se alamecena el valor encriptado de la base de datos

            //if (password_verify($pass, $hash)) //verifico que el valor encriptado se igual a la contraseña que me estan pasando si e sverdad creo las secciones
            //{
            //echo 'Password is valid!';
            $_SESSION['MensajeTexto'] = null;
            $_SESSION['MensajeTipo'] = null;
            header("Location: descripcion.php");
            //$_SESSION['MensajeTexto'] = "Felicidades"; //FUnciona bien
            //$_SESSION['MensajeTipo'] = "is-succes"; //FUnciona bien
            // } else {
            //echo 'Invalid password.';
            //$_SESSION['MensajeTexto'] = "Error validando datos de usuario";
            //$_SESSION['MensajeTipo'] = "is-danger";
            //}
        } else {

            $_SESSION['MensajeTexto'] = "Error validando datos de usuario ";
            $_SESSION['MensajeTipo'] = "is-danger";
        }
    } else {
        $query = "SELECT * FROM `profesor` WHERE `email` = '$user' AND `password` = '$pass' AND `estado`='A'";
        //$query = "SELECT * FROM `estudiante` WHERE `email` = '$user' AND `estado` = 'A'";
        $resultado = mysqli_query($link, $query);

        if (mysqli_num_rows($resultado) == 1) {
            # code...
            $row = $resultado->fetch_assoc();
            $_SESSION['idprofesor'] = $row['idprofesor'];
            // See the password_hash() example to see where this came from.
            //$hash = $row['password']; //se alamecena el valor encriptado de la base de datos

            //if (password_verify($pass, $hash)) //verifico que el valor encriptado se igual a la contraseña que me estan pasando si e sverdad creo las secciones
            //{
            //echo 'Password is valid!';
            $_SESSION['MensajeTexto'] = null;
            $_SESSION['MensajeTipo'] = null;
            header("Location: InicioProfesor.php");
            //$_SESSION['MensajeTexto'] = "Felicidades"; //FUnciona bien
            //$_SESSION['MensajeTipo'] = "is-succes"; //FUnciona bien
            // } else {
            //echo 'Invalid password.';
            //$_SESSION['MensajeTexto'] = "Error validando datos de usuario";
            //$_SESSION['MensajeTipo'] = "is-danger";
            //}
        } else {

            $_SESSION['MensajeTexto'] = "Error validando datos de usuario ";
            $_SESSION['MensajeTipo'] = "is-danger";
        }
    }
}
function consultarEstudiante($link, $id)
{
    $query = "SELECT * FROM `estudiante` WHERE `idestudiante` = '$id' AND `estado` = 'A' ";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = $resultado->fetch_assoc();
        return $row;
    } else {
        $_SESSION['MensajeTexto'] = "Error validando datos de usuario";
        $_SESSION['MensajeTipo'] = "is-danger";
        header("Location: ../index.php");
    }
}

function consultarProfesor($link, $id)
{
    $query = "SELECT * FROM `profesor` WHERE `idprofesor` = '$id' AND `estado` = 'A' ";
    $resultado = mysqli_query($link, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = $resultado->fetch_assoc();
        return $row;
    } else {
        $_SESSION['MensajeTexto'] = "Error validando datos de usuario";
        $_SESSION['MensajeTipo'] = "is-danger";
        header("Location: ../index.php");
    }
}

function ConsultarTarea($link, $id)
{
    $query = "SELECT * FROM `tarea` WHERE `idtarea` =  '$id'";
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
    $query = "SELECT * FROM `estudiante` ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}
function MostrarTarea($link)
{
    $query = "SELECT * FROM `tarea`  ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}

function MostrarTareaEstudianteID($link, $id)
{
    $query = "SELECT * FROM `tarea` WHERE `estudiante_idestudiante` =  '$id'";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}