<?php
/*- Exercici 2
Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array 
associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la 
nota de cada alumne, com la nota mitjana de la classe sencera.*/
$alumnos = array(
    "Pedro" => array(6,4,7,2,9),
    "Luis" => array(3,7,3,8,9),
    "Marlene" => array(6,8,7,2,1),
    "Marcol" => array(1,2,4,2,5),
);

function calcularMedia($alumnos) {
    $suma = array_sum(alumnos);
    $cant_notas = count($notas_alumos);
    return $suma / $cant_notas;
}
calcularMedia($alumnos);
?>