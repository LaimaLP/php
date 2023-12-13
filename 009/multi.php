<h1> Multi </h1>

<?php

echo '<pre>';

$mas4x4 = [
    [1, 2, 3, 4],
    [7, 8, 6, 4],
    [7, 8, 1, 4],
    [7, 8, 1, 4],
];

foreach ($mas4x4 as $row) {
    foreach ($row as $cell) {
        echo $cell . ' ';
    }
    echo '<br>';
}
echo '<br>';

foreach ($mas4x4[0] as $key => $column) {

    foreach ($mas4x4 as $row) {
        echo $row[$key] . ' ';
    }
    echo '<br>';
}


$arrayFancy = [
    [5, 8, 8],
    [8, [1, 2, 3], 8],
    [8, 8, [1, 2, 3]],
];
print_r($arrayFancy);

foreach ($arrayFancy as $row) {
    foreach ($row as $cell) {
        if (is_array($cell)) {
            foreach ($cell as $value) {
                echo $value . ' ';
            }
        } else {
            echo $cell . ' ';
        }
    }
    echo '<br>';
}

echo '<h3> kitas pvz <h3>';

$re = '/\d(\d)/m';
$str = 'Kaip skelbiama Policijos departamento įvykių suvestinėje, 14 val. 17 min. pranešta, kad Baraškių kaime agresyvi 50-ies metų moteris kastuvu užpuolė ir sužalojo jai padėti atvykusius medikus. Atvykusius pareigūnus moteris puolė su peiliu, ją bandyti neutralizuoti dujomis, keturiais elektros impulsinio prietaiso „Taser“ šūviais. Galiausiai policininkas priėmė sprendimą gintis pistoletu, skelbiama, kad pirmiausia šūvius iš „Glock 19“ jis paleido į kojas, po to į rankas, tačiau ir tai moters nesustabdė, paskutinė, mirtina kulka, pataikė į pilvą. Iš viso šauta 5 kartus. Tačiau išties policijos pagalba čia kviesta gerokai anksčiau nei skelbiama suvestinėje. Bendrojo pagalbos centro duomenimis, pirmą kartą jiems skambinta 12 val. 13 min. Pranešėjas paaiškino, kad jo mama serga sunkia psichikos liga ir jos būklė paūmėjo, ji tapo agresyvi, todėl reikia pareigūnų ir medikų pagalbos. '; 
preg_match_all($re, $str, $matches); 
// Print the entire match resultvar_dump($matches);
print_r($matches);

