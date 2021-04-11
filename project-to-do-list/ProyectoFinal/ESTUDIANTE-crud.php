<?php
try {
    //code...
    include_once('php/conexionDB.php');
    if (!empty($_GET['accion'])) {
        # code...
        $opcion = $_GET['accion'];
    } else {
        session_start();
        $_SESSION['MensajeTexto'] = "Avertencia: Accion realilzada no permitada";
        $_SESSION['MensajeTipo'] = "is-warning";
        header("Location: ProgESTUDIANTE.php");
    }

    //CRUD - INS - DLT -- UDT
    switch ($opcion) {
        case 'UDT':
            $contenido = filter_var($_POST['contenido'], FILTER_SANITIZE_STRING);  //para filtrar la data a string
            // $contenido = filter_var($_POST['Contenido1'], FILTER_SANITIZE_STRING);  //para filtrar la data a string
            $id =                filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
            $query = "UPDATE `tarea` SET `contenido`='$contenido', `estado_tarea`='A' WHERE `idtarea` = '$id'"; //para actualizar


            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error enviando tarea ";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: ProgESTUDIANTE.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Tarea realizada con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: ProgESTUDIANTE.php");
            }

            //cerrando conexion
            mysqli_close($link);
            break;

        default:
            # code...
            $_SESSION['MensajeTexto'] = "Avertencia: No se pudo identificar la accion a realizar";
            $_SESSION['MensajeTipo'] = "is-warning";
            header("Location: ProgESTUDIANTE.php");
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