<h1>Homework_String </h1>
<?php
/* 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus
(Jonas Jonaitis). Atspausdinti trumpesnį stringą */
echo '<br>';
echo '<h3> 1 uzduotis </h3>';
echo '<br>';

$vardas = 'Antanas';
$pavarde = 'Jonaitis';

if (strlen($vardas) > strlen($pavarde)) {
    echo $pavarde;
} else {
    echo $vardas;
}

/*2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms. */
echo '<br>';
echo '<h3> 2 uzduotis </h3>';

echo strtoupper($vardas);
echo '<br>';
echo strtolower($pavarde);
echo '<br>';

echo strtoupper($vardas) . ' ' . strtolower($pavarde);

/* 3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų
raidžių. Jį atspausdinti.*/
echo '<br>';
echo '<h3> 3 uzduotis </h3>';

$inicialai = $vardas[0] . $pavarde[0];
echo $inicialai;

/*4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės 
kintamųjų raidžių. Jį atspausdinti. */
echo '<br>';
echo '<h3> 4 uzduotis </h3>';

$lastThreeLettersCombo = substr($vardas, -3) . '' . substr($pavarde, -3);
echo $lastThreeLettersCombo;

/*5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias)
 pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.*/
echo '<br>';
echo '<h3> 5 uzduotis </h3>';


$string = 'An American in Paris';
echo str_ireplace('a', '*', $string);


/*6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” 
(didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.*/
echo '<br>';
echo '<h3> 6 uzduotis </h3>';
$count = 0;
$string2 = 'An American in Paris';
echo $string2;
str_replace('a', 'a', $string2, $count);
echo '<br>';
echo "mazuju a: $count";

$countBigA = 0;

str_replace('A', 'A', $string2, $countBigA);
echo '<br>';
echo "didziuju A: $countBigA";

$string3= 'An American Alphabaat in Paris';
$findSmallA= 'a';
$findBigA = 'A';
$countSmallA = substr_count($string3, $findSmallA);
$countBigA = substr_count($string3, $findBigA);
echo "<br> small a are $countSmallA, o big are: $countBigA";

/*7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą 
atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir 
“It's a Wonderful Life”.*/
echo '<br>';
echo '<h3> 7 uzduotis </h3>';
$kintamasis = 'An American in Paris';
$kintamasis2 = 'Breakfast at Tiffany\'s';
$kintamasis3 = '2001: A Space Odyssey';
$kintamasis4 = 'It\'s a Wonderful Life';

str_replace('A', '', $kintamasis);

echo preg_replace('/[aoiueAOIUE]/', '', $kintamasis);
echo '<br>';
echo preg_replace('/[aoiueAOIUE]/', '', $kintamasis2);
echo '<br>';
echo preg_replace('/[aoiueAOIUE]/', '', $kintamasis3);
echo '<br>';
echo preg_replace('/[aoiueAOIUE]/', '', $kintamasis4);

/* 8. Stringe, kurį generuoja toks kodas: 'Star Wars: 
Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.*/
echo '<h3> 8 uzduotis </h3>';
$kintamasis5 = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope';

preg_match('/(\d)/', $kintamasis5, $matches);

echo "Tekstas: $kintamasis5<br>";
echo "Numeris: $matches[0]";


/*9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood”
 yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų 
 Centro, geriant sultis pas save kvartale”.*/
echo '<h3> 9 uzduotis </h3>';

$movieName = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$movieName2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$wordsCount = str_word_count($movieName);
echo $wordsCount;
echo '<br>';

$pattern = '/\b\w{1,5}\b/u';
preg_match_all($pattern, $movieName, $matches2);

$skaicius = count($matches2[0]);
echo '<br>';
echo $skaicius;
$pattern2 = '/\b[ąčęėįšųūa-zA-Z\d]{1,5}\b/u';
preg_match_all($pattern2, $movieName2, $matches2);
$skaicius2 = count($matches2[0]);
echo '<br>';
echo $skaicius2;



/* 10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.*/
echo '<h3> 10 uzduotis </h3>';
$skaicius = rand(97, 122);
$pirmaRaide = chr(rand(97, 122));
$antraRaide = chr(rand(97, 122));
$treciaRaide = chr(rand(97, 122));

echo '<br>';
$naujasStringas = $pirmaRaide . $antraRaide . $treciaRaide;
echo "Lotyniskas zodis is triju random raidziu: $naujasStringas";
echo '<br>';
$letter1 = chr(rand(ord('a'), ord('z')));
$letter2 = chr(rand(ord('a'), ord('z')));
$letter3 = chr(rand(ord('a'), ord('z')));

$newString = $letter1 . '' . $letter2 . '' . $letter3;
echo '<br>';

echo "new string using ord function: $newString";

