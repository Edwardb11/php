<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores en php</title>
    <link rel="stylesheet" href="../bulma/css/bulma.min.css">
</head>
<body>
        <!-- Header -->
        <section class="hero is-dark">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        <center>Operadores en Php</center> 
                    </h1>
                </div>
            </div>
        </section>

    <!-- operadores aritmeticos-->
<form action="operadores.php" method="post">
  <strong>
       <label for="Valor1">Ingrese un numero: </label>
            <input type="number" name="Valor1"> <BR> <br/>
       <label for="Valor2">Ingrese otro numero: </label>
            <input type="number" name="Valor2"> <BR> <br/>
  </strong>
        <input type="submit" value="Calcular"> 
        <input type="reset" value="Restablecer">

</form>
    <!-- operadores aritmeticos php-->
<?php
@$a=$_POST['Valor1'];
@$b=$_POST['Valor2'];
@$suma= $a + $b;
@$resta= $a - $b;
@$multiplicacion= $a * $b;
@$division= $a / $b;
@$modulo= $a % $b;
@$exponenciacion= $a ** $b;



if($a==null and $b==null){
  echo'Introduzca los valores';
  echo'<br>';
} else{
  echo 'El valor 1 es: ' .$a; echo' <br>'; 
  echo 'El valor 2 es: ' .$b; echo' <br>';
  echo'La suma es : ' .$suma; echo' <br>';
  echo'La resta es : ' .$resta; echo' <br>';
  echo'La multiplicacion es : ' .$multiplicacion; echo' <br>';
  echo'La division es : ' .$division; echo' <br>';
  echo'La modulo es : ' .$modulo; echo' <br>';
  echo'La exponenciacion es : ' .$exponenciacion; echo' <br>';

  }
  ?>
        <!-- footer -->
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                    <strong>Hecho con HTML:5</i> por </strong> <a href="https://www.facebook.com/EdwardBritoDiaz/" target="_blank">Edward Brito Diaz</a>.
                </p>
            </div>
          </footer>
</body>
</html>
