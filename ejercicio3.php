<?php
/*Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si 
totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/
$var = "a";
$string = "hola";
//$array = array("hola", "php", "html");

function letra($string, $var){
    //$verif = function($palabra) use ($var);

    $verif = strpos($string, $var);
    return  $verif === false;
   
}

//$resp = ($var == $array) ? "True" : "False";
//return $resp;
echo letra($string, $var);

?>