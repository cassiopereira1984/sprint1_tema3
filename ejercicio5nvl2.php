<?php
/*Exercici 1
Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays.*/
$array1 = array(12, 51, 20.5);
$array2 = array(15, 51, 54.5);

//La intersecció dels dos arrays (nombres en comú)
$interseccion = array_intersect($array1, $array2);
echo "Los numeros en comun entre las arrays son:";
print_r($interseccion);

//La mescla dels dos arrays.
$mescla = array_merge($array1, $array2);
$mescla2 = $array2 + $array1;
print_r($mescla);
echo "\n";
print_r($mescla2);
?>