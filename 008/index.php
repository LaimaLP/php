<?php

$jonas = rand(5, 25);
$petras = rand(10, 20);
echo "Jonas: $jonas Petras: $petras <br>";

if ($jonas > $petras) {
    echo 'Laimejo Jonas';
} else if ($jonas < $petras) {
    echo 'Laimejo Petras';
} else {
    echo 'Lygiosios';
}
echo '<br>';

$kas = null;
var_dump(isset($kas));
//skaiciuoja buvo ar ne padarytas priskyrimas. Jei priskiriama i null, neskaiciuoja kai priskirimo;

echo '<br>';

var_dump($kas === null);
//arba lygus null arba nesetintas, irgi nullas. Bet jei kreipiames i neseinta, gaunam errora.
//undefined nera php kalboje, tik setinti ir ne, jei nesetintas tai nullas, bet priedo dar gaunam erora

