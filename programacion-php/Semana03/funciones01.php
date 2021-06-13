<?php
include_once('../database/provincias.php');

function titulo()
{
    echo "<h2> Trabajando con funciones </h2>";
}

function Saludo($nombre, $apellido)
{
    echo "Hola tu nombre es $nombre y tu apellido es $apellido";
}

function Sumar($a, $b)
{
    $resultado = $a + $b;
    return ($resultado);
}

function bProvincia($id = 0)
{
    // Entorno de variables funcion
    include('../database/provincias.php');
    $i = 0;
    foreach ($provincias as $key => $value) {
        if ($id == $value['provincia_id']) {
            return ($value['nombre']);
            $i++;
        }
    }

    if ($i == 0) {
        return ("Valor No Definido");
    }
}

function listarProvincias($nProvincias)
{
    echo "<ul>";
    foreach ($nProvincias as $key => $value) {
        echo "<li>" . ($value['nombre']) . "</li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Funcion Sencilla -->
    <p>
        <?php
        titulo();
        ?>
    </p>

    <!-- Funcion con pase de argumento o parametros -->
    <p>
        <?php
        $vNombre = 'Jose';
        $vApellido = 'Reyes';
        Saludo('Enmanuel', 'Perez');
        echo "<br>";
        Saludo($vNombre, $vApellido);
        ?>
    </p>

    <!-- Funcion que retorna un valor -->
    <p>
        <?php
        $pValor = 2;
        $sValor = 3;

        $pResultado = Sumar(4, 2);
        echo "El Resultado es $pResultado";
        echo "<br>";
        echo Sumar($pValor, $sValor);
        ?>
    </p>

    <!-- Funcion que retorna un valor con pase de argumen obligatorio a partir de PHP 8 -->
    <p>
        <?php
        echo bProvincia(10);
        echo "<br>";
        echo bProvincia(null);
        echo "<br>";
        echo bProvincia();
        echo "<br>";

        ?>
    </p>

    <!-- Funcion que que recibe un arreglo -->
    <p>
        <?php
        echo listarProvincias($provincias);

        ?>
    </p>
</body>

</html>