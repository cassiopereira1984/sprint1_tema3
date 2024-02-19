<?php
/*Exercici 2
$X = array (10, 20, 30, 40, 50,60);
Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
Mostra per última vegada la mida de l’array.*/
$x = array (10, 20, 30, 40, 50, 60);
$y = count($x);
echo "El tamaño de la array es de " . $y . "\n";

unset($x[3]);
$x = array_values($x);
$z = count($x);
echo "El tamaño de la array es de " . $z . "\n";

print_r($x);
?>