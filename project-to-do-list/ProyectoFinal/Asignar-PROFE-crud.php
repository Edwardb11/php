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
        header("Location: asignarTarea.php");
    }

    //CRUD - INS - DLT -- UDT
    switch ($opcion) {
        case 'INS':
            if (isset($_POST['guardar'])) {
                $titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);  //para filtrar la data a string
                //para filtrar la data a string
                $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);  //para filtrar la data
                //$contenido = filter_var($_POST['contenido'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);  //para filtrar la data
                $idestudiante = filter_var($_POST['estudiante'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data a entero
                $idprofesor = $_SESSION['idprofesor'];

                //original
                $query = " 
                INSERT INTO `tarea`(`profesor_idprofesor`, `estudiante_idestudiante`, `titulo`, `descripción`,`contenido`, `fecha_entrega`, `estado_tarea`, `estado`) VALUES ('$idprofesor','$idestudiante','$titulo', '$descripcion', '', '$fecha','I', '' )";
            }
            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error insertando el contenido ";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: asignarTarea.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro almacenado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: asignarTarea.php");
            }
            //cerrando conexion
            mysqli_close($link);


            //Para DLT  eliminar
            break;
        case 'DLT':
            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data
            $query = " DELETE FROM `tarea` WHERE `idtarea` = '$id'"; //para borrar
            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error borrando el registro";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: asignarTarea.php");
                //die("Error en base de datos: " . mysqli_error($link));
            } else {
                $_SESSION['MensajeTexto'] = "Registro borrado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: asignarTarea.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;

        case 'UDT':
            $idestudiante = filter_var($_POST['estudiante'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data a entero
            $idprofesor = $_SESSION['idprofesor'];
            $titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_STRING);  //para filtrar la data a string
            //para filtrar la data a string
            $descripcion = filter_var($_POST['descripcion'], FILTER_SANITIZE_STRING);  //para filtrar la data
            //$contenido = filter_var($_POST['contenido'], FILTER_SANITIZE_STRING);  //para filtrar la data
            $fecha = filter_var($_POST['fecha'], FILTER_SANITIZE_STRING);  //para filtrar la data
            //$estado = filter_var($_POST['estado'], FILTER_SANITIZE_NUMBER_INT);  //para filtrar la data a entero
            $id =                filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
            $query = "UPDATE `tarea` SET `profesor_idprofesor` = '$idprofesor', `estudiante_idestudiante`= '$idestudiante', `titulo`= '$titulo', `descripción`= '$descripcion', `contenido`='', `fecha_entrega`= '$fecha', `estado_tarea`= 'I', `estado`=' '  WHERE `idtarea` = '$id'"; //para actualizar


            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error actualizando el registro ";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: asignarTarea.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro actualizado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: asignarTarea.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;


        case 'UDTA':
            $estado = filter_var($_POST['estado'], FILTER_SANITIZE_STRING);  //para filtrar la data a entero
            $id =                filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
            $query = "UPDATE `estudiante` SET `estado`= '$estado'  WHERE `idestudiante` = '$id'"; //para actualizar


            $resultado = mysqli_query($link, $query); //Si devuelve True se ejecuto con exito y si no pues no
            if (!$resultado) {
                $_SESSION['MensajeTexto'] = "Error actualizando el registro ";
                $_SESSION['MensajeTipo'] = "is-danger";
                header("Location: infoProfesor.php");
                //die("Error en base de datos: ". mysqli_error($link)); 
            } else {
                $_SESSION['MensajeTexto'] = "Registro actualizado con exito";
                $_SESSION['MensajeTipo'] = "is-success";
                header("Location: infoProfesor.php");
            }
            //cerrando conexion
            mysqli_close($link);
            break;

        default:
            # code...
            $_SESSION['MensajeTexto'] = "Avertencia: No se pudo identificar la accion a realizar";
            $_SESSION['MensajeTipo'] = "is-warning";
            header("Location: asignarTarea.php");
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