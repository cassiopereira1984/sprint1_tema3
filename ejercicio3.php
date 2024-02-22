<?php
/*Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si 
totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/
$var = "h";
$array = ["hola", "php", "html"];
$encotrada = false;

foreach($array as $palabra) {
    for ($i = 0; $i < strlen($palabra); $i++) {
  //      echo $i;
        if ($palabra[$i] === $var) {
            $encotrada = true;
            break;
    //while($palabra !== $var) {
      //  $encotrada
    }
    //echo $palabra;
$encotrada = strpos($palabra, $var);
   // for ($i = 0; $i < strlen($palabra); $i++) {
        //echo $i;
     //   if ($palabra[$i] === $var){
       //     $encotrada = false;
       // }
    
}
}
//echo $encotrada;
if ($encotrada) {
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