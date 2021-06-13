<?php
function MostrarTipoMant($link)
{
    $query = "SELECT * FROM `tipo_mantenimiento` ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}
function MostrarTipoEquipo($link)
{
    $query = "SELECT * FROM `tipo_equipo` ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}
function MostrarPropietario($link)
{
    $query = "SELECT * FROM `propietario` ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}
function MostrarCliente($link)
{
    $query = "SELECT * FROM `clientes` ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}
function MostrarTripulacion($link)
{
    $query = "SELECT * FROM `tripulacion` ";
    $resultado = mysqli_query($link, $query);
    return $resultado;
}


//UPDATE de editar
function ConsultarTiposMant($link, $id)
{
    $query = "SELECT * FROM `tipo_mantenimiento` WHERE `codtipo_mant` =  '$id'";
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

function ConsultarTiposEquipo($link, $id)
{
    $query = "SELECT * FROM `tipo_equipo` WHERE `codtipo_equipo` =  '$id'";
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
function ConsultarTiposPropietario($link, $id)
{
    $query = "SELECT * FROM `propietario` WHERE `codpropietario` =  '$id'";
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
function ConsultarTiposCliente($link, $id)
{
    $query = "SELECT * FROM `clientes` WHERE `codcliente` =  '$id'";
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
function ConsultarTiposTripulacion($link, $id)
{
    $query = "SELECT * FROM `tripulacion` WHERE `codtribulacion` =  '$id'";
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