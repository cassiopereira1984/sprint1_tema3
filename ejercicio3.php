<?php
/*Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si 
totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/
$var = "x";
$array = array("hola", "php", "html");

function letra($var, $array) {
    $verif = strpos($var, $array);
    return $verif !== false;
   
}

//$resp = ($var == $array) ? "True" : "False";
//return $resp;
echo letra($var, $array);
?>