
<pre>
<?php

/* 10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė 
value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai 
sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį 
sudarytų masyvo reikšmės nuspalvintos spalva color.*/


// [ [ [value, color],[],[],[],[],[],[],[],[],[] ], [2[v,c],[v,c],[v,c],[v,c]],[3],[4],...]

echo "<h3> 10 task </h3>";

$firstArr = [];

function genereteThirdArr()
{
    $symbols = ['#', '%', '+', '*', '@', '裡'];
    $thirdArr['value'] = $symbols[array_rand($symbols)];
    $thirdArr['color'] = rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255);
    return $thirdArr;
}


$thirdArr = [];

while (count($firstArr) < 10) {
    $secondArr = [];
    while (count($secondArr) < 10) {
        $secondArr[] = genereteThirdArr();
    }
    $firstArr[] = $secondArr;
}



foreach($firstArr as $arr){
    foreach($arr as $item){
        echo '<div style="width: 20px; height: 20px; display: inline-block; background-color: rgb(' . $item['color'] . ');">' . $item['value'] . '</div>';
    }
    echo '<br>';
}