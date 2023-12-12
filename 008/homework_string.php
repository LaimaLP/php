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

$inicialai = $vardas[0].$pavarde[0];
echo $inicialai;

/*4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės 
kintamųjų raidžių. Jį atspausdinti. */
echo '<br>';
echo '<h3> 4 uzduotis </h3>';

$lastThreeLettersCombo = substr($vardas,-3).''.substr($pavarde,-3);
echo $lastThreeLettersCombo;

/*5. Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias)
 pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.*/
 echo '<br>';
 echo '<h3> 5 uzduotis </h3>';


 $string = 'An American in Paris';
 echo str_ireplace('a','*', $string);


/*6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” 
(didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.*/


/*7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą 
atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir 
“It's a Wonderful Life”.*/

/* 8. Stringe, kurį generuoja toks kodas: 'Star Wars: 
Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.*/

/*9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood”
 yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų 
 Centro, geriant sultis pas save kvartale”.*/


 /* 10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.*/
