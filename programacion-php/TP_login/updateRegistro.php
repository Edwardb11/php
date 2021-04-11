<?php
try {
    //code...
    include_once('./ConexionDB.php');
    include_once('./consulta.php');
    if (!empty($_GET['opciones'])) {
        # code...
        $opcion = $_GET['opciones'];
    } else {
        session_start();
        $_SESSION['MensajeTexto'] = "Avertencia: Accion realilzada no permitada";
        $_SESSION['MensajeTipo'] = "is-warning";
        header("Location: ./index.php");
    }

    //CRUD - INS - DLT -- UDT
    switch ($opcion) {
        case 'INS':
            if (isset($_POST['ingresar'])) {
                $nombre = filter_var($_POST['name'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $correo = filter_var($_POST['email'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $clave = filter_var($_POST['password'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $hash_passcode = password_hash($clave, PASSWORD_DEFAULT);
                $query = " 
                INSERT INTO `usuarios`(`nombre`, `apellido`, `correo`, `clave`) VALUES ('$nombre', '$apellido', '$correo', '$hash_passcode')";
            }

            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error insertando el contenido";
                $_SESSION['MensajeTipo'] = "is-danger";
                // header("Location: ./index.php");
                // die("Error en base de datos: " . mysqli_error($link));
            } else {
                $_SESSION['MensajeTexto'] = "Registro almacenado con exito, por favor inicie session";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ./index.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;
        default:
            # code...
            $_SESSION['MensajeTexto'] = "Avertencia: No se pudo identificar la accion a realizar";
            $_SESSION['MensajeTipo'] = "is-warning";
            header("Location: ./index.php");
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