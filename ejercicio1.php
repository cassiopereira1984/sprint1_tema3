<?php
/*Exercici 1
Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.*/
$n = array(2, 4, 5, 8, 14);
echo $n[0] . $n[1] . $n[2] . $n[3] . $n[4];
foreach($n as $array){
    echo $array;    
}
print_r($n);
?>