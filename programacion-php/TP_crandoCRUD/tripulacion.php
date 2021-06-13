<?php
try {
    //code...
    include_once('./conexion.php');
    include_once('./consul.php');
    if (!empty($_GET['opciones'])) {
        # code...
        $opcion = $_GET['opciones'];
    } else {
        session_start();
        $_SESSION['MensajeTexto'] = "Avertencia: Accion realilzada no permitada";
        $_SESSION['MensajeTipo'] = "is-warning";
        header("Location: ./index5.php");
    }

    //CRUD - INS - DLT -- UDT
    switch ($opcion) {
        case 'INS':
            if (isset($_POST['guardarDatos'])) {
                $descripcion = filter_var($_POST['consultar'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $num_horas = filter_var($_POST['num_horas'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $valor_horas = filter_var($_POST['valor_hora'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $query = " 
                INSERT INTO `tripulacion`(`nombre`, `direccion`, `telefeno`, `num_horas`, `valor_hora`) VALUES ('$descripcion', '$direccion', '$telefono', '$num_horas', '$valor_horas')";
            }

            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['mensajeTexto'] = "Error insertando el contenido";
                $_SESSION['mensajeTipo'] = "is-danger";
                header("Location: ./index5.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['mensajeTexto'] = "Registro almacenado con exito";
                $_SESSION['mensajeTipo'] = "is-success";
                header("Location: ./index5.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;

        case 'DLT':
            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data
            $query = " DELETE FROM `tripulacion` WHERE `codtribulacion` = '$id'"; //para borrar
            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error borrando el registro";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ./index5.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro borrado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ./index5.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;

        case 'UDT':
            $descripcion = filter_var($_POST['consultar'], FILTER_SANITIZE_STRING);  //para filtrar la data
            $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);  //para filtrar la data
            $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);  //para filtrar la data
            $num_horas = filter_var($_POST['num_horas'], FILTER_SANITIZE_STRING);  //para filtrar la data
            $valor_horas = filter_var($_POST['valor_hora'], FILTER_SANITIZE_STRING);
            $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);            //$query = " DELETE FROM `grupo` WHERE `grupoid` = '$id'"; //para borrar
            $query = "UPDATE `tripulacion` SET `nombre` = '$descripcion', `direccion` = '$direccion', `telefeno` = '$telefono', `num_horas`= '$num_horas', `valor_hora` = '$valor_horas' WHERE `codtribulacion` = '$id'"; //para actualizar


            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error actualizando el registro";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ./index5.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro actualizado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ./index5.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;

        default:
            # code...
            $_SESSION['mensajeTexto'] = "Avertencia: No se pudo identificar la accion a realizar";
            $_SESSION['mensajeTipo'] = "is-warning";
            header("Location: ./index5.php");
            //die("Error en base de datos: ". mysqli_error($link));  //muestra en pantalla el error que se ejecuta
            break;
    }
} catch (Exception $e) {
    print "Exception no controlado 01" . $e->getMessage();
    print "Estamos trabajando en corregir esta situacion";
} catch (Error $e) {
    print "Error no controlado 01" . $e->getMessage();
    print "Estamos trabajando en corregir esta situacion";
}