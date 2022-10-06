<?php

function crearCarton()
{
    $carton = range(1, 60);
    shuffle($carton);

    return array_slice($carton, 0, 15);
}


function crearJugador()
{
    $jugador = array();
    array_push($jugador, crearCarton(), crearCarton(), crearCarton());
    return $jugador;
}

function obtenerBolas()
{
    $bolas = range(1, 60);
    shuffle($bolas);
    return $bolas;
}


function ganador($jugador, $bolas)
{

    for ($i = 0; $i < count($jugador); $i++) {
        $cont = 0; //el primer for es para los cartones, por es uno para cada uno
        for ($j = 0; $j < count($jugador[$i]); $j++) {

            if (in_array($jugador[$i][$j], $bolas)) {
                //llama uun recorte de bolas, las bolas que hasta ese momento se ha llamado
                $cont++;
            }
        }
        if ($cont == 15) {
            echo "el cartton ganador es $i </br>";
            echo " <br>";
            return true;
        }
    }
    return false;
}
function juegoTerminado($jugadores, $bolas, $pos)
{
    for ($i = 0; $i < count($jugadores); $i++) {
        if (ganador($jugadores[$i], array_slice($bolas, 0, $pos))) {
            //si esta en 15 va de 0 a 15
            return $i;
        }
    }
    return -1; //porque puede no ganar ninguno
}

function jugar()
{
    $jugadores = array();
    array_push($jugadores, crearJugador(), crearJugador(), crearJugador(), crearJugador());
    $bolas = obtenerBolas();
    $pos = 0;
    do {
        $ganador = juegoTerminado($jugadores, $bolas, $pos);
        $pos++;
    } while ($ganador == -1);
    echo "Ha ganado jugador $ganador </br>";
    echo "en $pos jugadas </br>";
    imprimir($bolas);
    echo "</br>";
    //imprimir($jugadores[$ganador]);
    echo "los cartones del ganador son ";
    print_r($jugadores[$ganador]);
}

function imprimir($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i]." ";
        
    }
}
