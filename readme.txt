Sintaksė

	PHP kodas rašomas į failą, turintį “php” išplėtimą. Kodas pradedamas simboliais <?php PHP kodas užbaigiamas kartu su failo pabaiga arba jeigu PHP kodo pabaiga nesutampa su failo pabaiga, kodas užbaigiamas simboliais ?>

Mažosios ir didžiosios raidės interpretuojamos skirtingai:
$drambliai, $Drambliai
Kintamieji prasideda dolerio ženklu:
$kintamasis
Kodas sudarytas iš sakinių. Kiekvienas sakinys užbaigiamas kabliataškiu ;
$a = $b;
Sakinys gali būti užrašomas per kelias ar daugiau eilučių
$a
 = 
$b


;
Sakiniai gali būti sugrupuoti  atskirais blokais kurie išskiriami “garbanotais” skliaustais
{
$a = $b;
$c = $abc;
}
Funkcijos iškvietimas užrašoma taip:
print_r($argumentas, $argumentas_2);
Kalbos konstruktai arba teiginiai rašomi be skliaustelių:
echo 'Hello Africa!';
Rašant kodą, į jį galima įterpti paaiškinimus (komentarus). PHP tai galima padaryti trim būdais:
Vienos eilutės komentaras:
$suma = $pirmas + $pirmas; // toliau skaičiuosime sumą
$suma = $pirmas + $pirmas; # toliau skaičiuosime sumą
 	Kelių eilučių komentaras:
/*
toliau skaičiuosime
Sumą
*/
$suma = $pirmas + $pirmas;


Kintamieji jų tipai, žymėjimas ir veiksmai su jais

Kintamieji yra pavadinimas kiekvienam sukurtam duomenų gabalui - numeriui, žodžiui, masyvui, objektui, resursui.
Kintamojo vardas turi prasidėti raide arba apatiniu brūkšniu.

Kintamojo sukūrimas ir duomenų jam priskyrimas
$pirmas = 87;
$antras = $darKitas = 'ku kū';
Aritmetiniai veiksmai su kintamaisiais ( / * - + % )
$trecias = 5;
$ketvirtas = $trecias + 5;
$penktas = $trecias + $ketvirtas;
Kintamojo padidinimas (sumažinimas) vienetu
$trecias++;
$trecias--;
++$trecias;
--$trecias;
Sutrumpintas veiksmo užrašymas
$ketvirtas = $ketvirtas + 5;
$ketvirtas += 5;
Dviejų stringų sudėjimas
$pirmas = 'bla bla';
$antras = 'ku kū';
$trecias = $pirmas . $antras;
Strigus išskiriame viengubom kabutėm, kai stringas neturi jokios specialios reikšmės savyje ir dvigumom kada turi
$pirmas = 'bla bla';
$antras = "ku $pirmas kū";
Kintamojo vardas turi labai aiškiai nusakyti kintamojo paskirtį arba šalia turi būti komentaras, paaiškinantis kam tas kintamasis yra skirtas. Ši taisyklė nėra PHP sintaksės taisyklė, bet ji plačiai naudojama realiai rašant PHP kodą, todėl mūsų mokslų metu ji bus PRIVALOMA.


Gerai

$triusiuko_kiausiniai = 7;
$triusiukoKiausiniai = 7;
$bunny_eggs = 7;
$tk = 7; //skaičiuoja triušiuko kiaušinius

Blogai

$gg = 7;
$trius_kiaus = 7;
Kintamojo sunaikinimas
	unset($trius_kiaus, $gg);

Kintamųjų tipai

Boolean
$is_set = True; // $is_set priskiriame  TRUE

Integer
$bugs_in_code = 1234; // dešimtainis
$kilometres_to_go = -123; // neigiamas
$bugs_in_cod = 0123; // aštuntainis (83 dešimtainėje)
$bugs_in_cod = 0x1A; // šešioliktainis (26 dešimtainėje)
$bugs_in_cod = 0b11111111; // dvejetainis (dvejetainis 255 dešimtainėje)

Float
$account_balance = 1.234;
$account_balance = 1.2e3;
$account_balance = 7E-10;

String
$pig = 'kiaulė';

Null
$something = NULL;

Kintamojo kintamasis
PHP kalboje galime naudoti kintamojo kintamąjį. T.y. kai vieno kintamojo reikšmė yra kito kintamojo vardas. Kintamojo kintamasis žymimas dviem dolerio ženklais. Dolerio ženklų gali būti daugiau nei du. Tokiu būdu galime pažymėti kintamojo kintamojo kintamąjį ir t.t.

$pirmas = 'antras';
$antras = 'bla bla';
echo $$pirmas;

Kintamųjų išvedimas iš kodo

$pirmas = 'bla bla';
$antras = 'ku kū';
echo $pirmas, $antras;
print $pirmas;

programuotojams
print_r($pirmas);
var_dump($pirmas, $antras);

Tam, kad keliais echo išvedama informacija naršyklės ekrane nesusiplaktų į vieną eilutę, tarp jų naudojamas html tagas <br> <pre></pre>


