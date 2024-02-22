<?php
/*- Exercici 4
Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

nom
edat
email
menjar*/
$array = array("nombre" => "Cassio", "edat" => "40", "email" => "cas@cas.com", "menjar" => "bbq");

echo $array["nombre"] . "\n";
echo $array["edat"] . "\n";
echo $array["email"] . "\n";
echo $array["menjar"];

print_r($array);

foreach ($array as $echo){
    echo $echo . "\n";
}

?>