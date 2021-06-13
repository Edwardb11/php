<?php
try {
    //code...
    include_once('../php/conexiondb.php');
    if (!empty($_GET['accion'])) {
        # code...
        $opcion = $_GET['accion'];
    } else {
        session_start();
        $_SESSION['MensajeTexto'] = "Avertencia: Accion realilzada no permitada";
        $_SESSION['MensajeTipo'] = "is-warning";
        header("Location: ./grupo-mant.php");
    }

    //CRUD - INS - DLT -- UDT
    switch ($opcion) {
        case 'INS':
            if (isset($_POST['guardar'])) {
                $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $query = " 
                INSERT INTO `grupo`(`descripcion`, `estado`) VALUES ('$descripcion', 'A')";
            }
            //AES_DESCRIPT($descripcion, llave)
            //AES_ENCRYPT('$descripcion', llave) para encriptar datos a nivel de base de datos 
            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error insertando el contenido";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ./grupo-mant.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro almacenado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ./grupo-mant.php");
            }
            //cerrando conexion
            mysqli_close($link);


            //Para DLT  eliminar
            break;
        case 'DLT':

            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data
            //$query = " DELETE FROM `grupo` WHERE `grupoid` = '$id'"; //para borrar
            $query = "UPDATE `grupo` SET `estado` = 'I' WHERE `grupoid` = '$id'"; //para actualizar


            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error borrando el registro";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ./grupo-mant.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro borrado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ./grupo-mant.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;
        case 'UDT':

            $id =                filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data a entero
            $descripcion =       filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);  //para filtrar la data string
            $estado =            filter_var($_POST['estado'], FILTER_SANITIZE_STRING);  //para filtrar la data string
            //$query = " DELETE FROM `grupo` WHERE `grupoid` = '$id'"; //para borrar
            $query = "UPDATE `grupo` SET `descripcion` = '$descripcion', `estado`= '$estado' WHERE `grupoid` = '$id' "; //para actualizar


            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error actualizando el registro";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ./grupo-mant.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro actualizado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ./grupo-mant.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;

        default:
            # code...
            $_SESSION['MensajeTexto'] = "Avertencia: No se pudo identificar la accion a realizar";
            $_SESSION['MensajeTipo'] = "is-warning";
            header("Location: ./grupo-mant.php");
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