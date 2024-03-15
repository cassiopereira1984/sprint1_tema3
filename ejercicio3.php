<?php
/*Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si 
totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/
$letra = "a";
$arrayPalabras = ["hola", "php", "html"];

function busquedaLetra($letra, $arrayPalabras) {
    foreach($arrayPalabras as $palabra) {   
        for($i = 0; $i < strlen($palabra); $i++) {
            if ($palabra[$i] == $letra) {
                $resp = "La letra se ha ha encontrado"; 
                break; 
            } else {
                $resp = "la letra no se ha encontrado";
            }
        
        }
    }
    return $resp; 
}

echo busquedaLetra($letra, $arrayPalabras);

/*function consultaLetra($letra, $arrayPalabras) {
    foreach ($arrayPalabras as $palabra) {
        if (strpos($palabra, $letra) === false) {
            return false; // Si la letra no se encuentra en una palabra, retornar falso
        }
    }
    return true; // Si se encontró la letra en todas las palabras, retornar verdadero
}

function consultaLetra($letra, $arrayPalabras) {
    foreach ($arrayPalabras as $palabra) {
        $encontrada = false; // Inicializamos la variable antes de entrar al bucle de la palabra
        for ($i = 0; $i < strlen($palabra); $i++) {
            if ($palabra[$i] === $letra) {
                $encontrada = true; // Si encontramos la letra en la palabra, marcamos como encontrada
                break; // Salimos del bucle ya que ya encontramos la letra
            }
        
        }
    }
    return true; // Si se encontró la letra en todas las palabras, retornar verdadero
}

echo consultaLetra($letra, $arrayPalabras);

echo array_key_exists($array, $var);

function controlLetra($array, $var) {
    foreach($array as $palabra) {
        for ($i = 0; $i < strlen($palabra); $i++) {
            echo $i;
            if ($palabra[$i] === $var) {
                $encotrada = true;
            }
        
        }
    }
    echo " %%% " . $encotrada . " %%";
        }
    
//$encotrada = strpos($palabra, $var);
   // for ($i = 0; $i < strlen($palabra); $i++) {
        //echo $i;
     //   if ($palabra[$i] === $var){
       //     $encotrada = false;
       // }

//echo $encotrada. "hola";
//echo $encotrada;
if (controlLetra($array, $var)) {
    echo "Totas las palabras tienen la letra " . $var;
} else {
    echo "No todas las palabras tienen la letra " . $var; 
}
/*$letra = array_search($var, $array); 
echo $letra;

function busquedaLetra($letra, $var) {
        if ($letra !== false) {
            echo "Totas las palabras tienen la letra " . $var;
        } else {
            echo "No todas las palabras tienen la letra " . $var; 
        }
}
busquedaLetra($letra, $var);
/*


if (count($array))

function letra($array, $var){
    foreach($array as $verif) {
        if (strpos($verif, $var) === false) {
            return false;
        }
    }
    return true;
}

    if (letra($array, $var)) {
        echo "Totas las palabras tienen la letra " . $var;
    } else {
        echo "No todas las palabras tienen la letra " . $var; 
    }

echo letra($array, $var);*/
?>