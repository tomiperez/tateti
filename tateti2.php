<?php

const player1 = 'Y';     
const player2 = 'X';

$tablero = array();
$tablero [] = array (3,3,3);
$tablero [] = array (3,3,3);
$tablero [] = array (3,3,3);
$ganador;

function lleno ($tablero)
{
    foreach ($tablero as $value){
        foreach ($value as $position){
            if ($position==3){
                return false;
            }
        }
    }
    return true;
}

function randomPosition ()
{
    return array (
        rand(0,2),
        rand(0,2)
    );
}

function ganador ($tablero)
{
    for ($i=0; $i <=2;$i++){
        if ($tablero[$i][0] !=3 && $tablero[$i][0]== $tablero[$i][1] && $tablero[$i][1]==$tablero[$i][2]){
            global $ganador;
            $ganador = $tablero[$i][0];
            echo 'el ganador es ' . $ganador . "\n";
            return true; 
        }
    }
    for ($i=0; $i <=2;$i++){
        if ($tablero[0][$i] !=3 && $tablero[0][$i]== $tablero[1][$i] && $tablero[1][$i]==$tablero[2][$i]){
            global $ganador;
            $ganador = $tablero[0][$i];
            echo 'el ganador es ' . $ganador . "\n";
            return true;
        }
    }
    return false;
}


$jugador = player1;
while ( !lleno($tablero) && !ganador($tablero) ) {
    global $jugador;
    $position = randomPosition();
        if ($tablero [ $position[0] ][ $position[1] ] == 3 ){
            $tablero [ $position[0] ][ $position[1] ] = $jugador;
        }
    
    if ($jugador == player1){
        $jugador = player2;
        

    }else{
        $jugador = player1;
    }
}
    foreach ($tablero as $value) {
        
        echo ($value[0]); 
       }
        echo "\n";
        foreach ($tablero as $value) {
          echo ($value[1]) ; 
        }
        echo "\n";
          foreach ($tablero as $value) {
          echo ($value[2]); 
        }
        echo "\n";  
        