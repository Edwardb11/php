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
        header("Location: ./usuarios-mant.php");
    }

    //CRUD - INS - DLT -- UDT
    switch ($opcion) {
        case 'INS':
            if (isset($_POST['guardar'])) {
                //Para verificart si el usuario ya existe y no repetirce 
                $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                $query1 = "SELECT `email` FROM `usuario` WHERE `email`='$email'";
                $result1 = mysqli_query($link, $query1);
                if (mysqli_num_rows($result1) > 0) {
                    // Si es mayor a cero imprimimos que ya existe el usuario
                    $_SESSION['MensajeTexto'] = "El usuario ya existe";
                    $_SESSION['MensajeTipo'] = "is-danger";
                    header("Location: ./usuarios-mant.php");
                    mysqli_close($link);
                    break;
                }
                $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);  //para filtrar la data a string
                $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);  //para filtrar la data
                //encriptar datos 
                $hash_passcode = password_hash($password, PASSWORD_DEFAULT); //entonces esta variable encriptada es la que se le pasa a la base de datos
                //$hash_user = password_hash($username, PASSWORD_DEFAULT); //entonces esta variable encriptada es la que se le pasa a la base de datos
                $tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data a entero
                $query = " 
                INSERT INTO `usuario`(`email`, `username`, `password`, `grupoid`, `estado`) VALUES ('$email', '$username', '$hash_passcode', '$tipo', 'A')";
            }
            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error insertando el contenido UDT";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ./usuarios-mant.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {

                $_SESSION['MensajeTexto'] = "Registro almacenado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ./usuarios-mant.php");
            }
            //cerrando conexion
            mysqli_close($link);


            //Para DLT  eliminar
            break;
        case 'DLT':

            //Para verificart si el usuario ya esta vinculado a un tipo
            $tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_NUMBER_INT);
            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
            $query1 = "SELECT * FROM `usuario` WHERE `grupoid`='$tipo' AND `userid`='$id'";
            $result1 = mysqli_query($link, $query1);
            if (mysqli_num_rows($result1) > 0) {
                // Si es mayor a cero imprimimos que ya existe el usuario
                $_SESSION['MensajeTexto'] = "El usuario no se puede borrar porque esta asignado a uno hecho.";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ./usuarios-mant.php");
                mysqli_close($link);
                break;
            } else {


                $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data
                //$query = " DELETE FROM `usuario` WHERE `userid` = '$id'"; //para borrar
                $query = "UPDATE `usuario` SET `estado` = 'I' WHERE `userid` = '$id'"; //para actualizar
                $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
                if (!$resultado) {
                    $_SESSION['MensajeTexto'] = "Error borrando el registro";
                    $_SESSION['MensajeTipo'] = "is-danger";
                    header("Location: ./usuarios-mant.php");
                    //die("Error en base de datos: " . mysqli_error($link));
                } else {
                    $_SESSION['MensajeTexto'] = "Registro borrado con exito";
                    $_SESSION['MensajeTipo'] = "is-success";
                    header("Location: ./usuarios-mant.php");
                }
                //cerrando conexion
                mysqli_close($link);
                break;
            }
        case 'UDT':

            $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);  //para filtrar la data
            $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);  //para filtrar la data
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);  //para filtrar la data
            //encriptar datos 
            $hash_user = password_hash($username, PASSWORD_DEFAULT); //encriptar usuario
            $hash_passcode = password_hash($password, PASSWORD_DEFAULT); //entonces esta variable encriptada es la que se le pasa a la base de datos
            $estado =            filter_var($_POST['estado'], FILTER_SANITIZE_STRING);
            $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data a entero
            $tipo = filter_var($_POST['tipo'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data
            $query = "UPDATE `usuario` SET `username` = '$hash_user', `email`= '$email', `password`= '$hash_passcode', `grupoid`= '$tipo', `estado`= '$estado' WHERE `userid` = '$id'"; //para actualizar


            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error actualizando el registro Edward";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ./usuarios-mant.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro actualizado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ./usuarios-mant.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;

        default:
            # code...
            $_SESSION['MensajeTexto'] = "Avertencia: No se pudo identificar la accion a realizar";
            $_SESSION['MensajeTipo'] = "is-warning";
            header("Location: ./usuarios-mant.php");
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