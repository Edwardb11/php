<?php
function fValidar($usuario = null, $clave = null)
{
    if ($usuario == 'usuario' and $clave == '123') {
        return True;
    } else {
        return False;
    }
}

function Saludo($nombre, $apellido)
{
    echo "Hola tu nombre es $nombre y tu apellido es $apellido";
}
