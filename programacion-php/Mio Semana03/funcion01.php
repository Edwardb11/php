<?php
include_once('../database/provincias.php');

function titulo()
{
    echo "<h2> Trabajando con funciones</h2>";
}

function saludo($nombre, $apellido)
{
    echo "Hola  tu nombre es $nombre y tu apellido es $apellido";
}


function Sumar($a, $b)
{
    $resultado = $a + $b;
    return $resultado;
}
function restar($a, $b)
{
    $resultado = $a - $b;
    return $resultado;
}
function multiplicar($a, $b)
{
    $resultado = $a * $b;
    return $resultado;
}

function dividir($a, $b)
{
    if ($b == 0) {
        echo "Imposible dividvir entre cero";
        echo "<br>";
        $resultado = 0;
    } else {
        $resultado = $a / $b;
    }
    return $resultado;
}

function bProvincia($id=0 )
{
    //Entorno de variable
    include('../database/provincias.php');
    $i = 0;
    foreach ($provincias as $key => $value)
    { if ($id == $value['provincia_id']) {
            return ($value['nombre']);
            $i++;
        }
    }
    if ($i == 0) {
        return ("Valor no definido");
    } else {
        return $value['nombre'];
    }
}


function Listarprovincias($nProvincia)
{
    include('../database/provincias.php');
    echo "<ul>";
    foreach ($provincias as $key => $value) {
        echo "<li>" . ($value['nombre']) . "</li>";
    }
    echo "</ul>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Funcion sencilla -->
    <p>
        <?php
        titulo();

        ?>
    </p>
    <!-- Funcion con argumento o paramtro-->
    <p>
        <?php
        $Vnombre = "Jose";
        $Vapellido = "Marte";
        saludo($Vnombre, $Vapellido);
        echo "<br>";
        saludo("Edward", "Brito");
        ?>
    </p>
    <!-- Funcion que retorna un valor -->
    <p>
        <?php
        $Valor1 = 3;
        $Valor2 = 2;
        $presultado = Sumar(3, 2);
        echo "El resultado es $presultado";
        echo "<br>";
        echo Sumar($Valor1, $Valor2);
        ?>
    </p>

    <!-- Resta -->
    <p>
        <?php
        $Valor1 = 3;
        $Valor2 = 2;
        $presultado = restar(3, 2);
        echo "El resultado de la resta es $presultado";
        echo "<br>";
        echo restar($Valor1, $Valor2);
        ?>
    </p>
    <!-- Multiplicacion -->
    <p>
        <?php
        $Valor1 = 3;
        $Valor2 = 2;
        $presultado = multiplicar(3, 2);
        echo "El resultado de la multiplicacion es $presultado";
        echo "<br>";
        echo multiplicar($Valor1, $Valor2);
        ?>
    </p>

    <!-- Division -->
    <p>
        <?php
        $Valor1 = 3;
        $Valor2 = 2;
        $presultado = dividir(3, 0);
        echo "El resultado de la division es $presultado";
        echo "<br>";
        echo dividir($Valor1, $Valor2);
        ?>
    </p>

    <!-- funcion para retornar un valor en base a argumentos obligatorios de php 8  -->
    <p>
        <?php
        echo bProvincia(10);
        echo "<br>";
        echo bProvincia(null);
        echo "<br>";
        echo bProvincia();
        ?>
    </p>

    <!-- funcion que recibe un arreglo -->
    <p>
        <?php
        echo Listarprovincias($provincias);

        ?>
    </p>
</body>

</html>