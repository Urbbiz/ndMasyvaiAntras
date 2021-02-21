<h4>Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
</h4>
<?php

$masyvas = [];
foreach (range(1, 10) as $index1 => $reiksme1) {
    foreach (range(1, 5) as $index2 => $reiksme2) {
        $masyvas[$index1][$index2] = rand(5, 25);
    }
}
_dc($masyvas);
_d($masyvas);


// // ++++ SU FORU ++++
// for($i = 0; $i < 10; $i++){
//     for($j = 0; $j < 5; $j++){
//         $vidineReiksme = rand(5, 25);
//         $masyvas[$i][$j] = $vidineReiksme;
//     }
// }
// _dc($masyvas);
?>
<h4>2. a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;</h4>
<?php
$counter = 0;
foreach ($masyvas as $index => $value) {
    foreach ($value as $index2 => $value2)
        if ($value2 > 10) {
            $counter++;
        }
}
_dc("didesniu reiksmiu uz 10 yra = $counter");
?>

<h4>2. b)Raskite didžiausio elemento reikšmę;</h4>
<?php
$didizausiaReiksme = 0;
foreach ($masyvas as  $vidineReiksme) {
    if (max($vidineReiksme) > $didizausiaReiksme)
        $didizausiaReiksme = max($vidineReiksme);
}
echo "<br>";
_dc($didizausiaReiksme);
?>

<h4>2. c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
</h4>
<?php

$sumosArray = [];
$suma = 0;
for ($i = 0; $i < count($vidineReiksme); $i++) {
    for ($j = 0; $j < count($masyvas); $j++) {
        $suma += $masyvas[$j][$i];
    }
    $sumosArray[] = $suma;
    $suma = 0;
}
_dc($sumosArray);
?>

<h4>2. d) Visus masyvus “pailginkite” iki 7 elementų</h4>

<?php
foreach ($masyvas as $key => $val) {
    foreach (range(1, 2) as $key2 => $val2) {
        $masyvas[$key][] = rand(5, 25);
    }
}
echo '<pre>';
print_r($masyvas);
_d($masyvas);
?>

<h4>e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai</h4>
<?php
$masyvasE = [];
$suma2 = 0;
foreach ($masyvas as $key => $val) {
    foreach ($val as $key2 => $val2) {
        $suma2 += $masyvas[$key][$key2];
    }
    if ($key2 == 6) {
        $masyvasE[] = $suma2;
        $suma2 = 0;
    }
}
_dc($masyvasE);
?>
<h4> 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
</h4>

<?php
$array3 = [];

for ($i = 0; $i < 10; $i++) {
    $vidinioMasyvoIlgis = rand(2, 20);
    for ($j = 0; $j < $vidinioMasyvoIlgis; $j++) {
        $array3[$i][$j] = chr(rand(65, 90));
        array_multisort($array3[$i]);
    }
}
echo '<br>';
print_r($array3);
_d($array3);
?>

<h4> 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje.
</h4>
<?php
sort($array3);
_dc($array3);

?>

<h4>5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.
</h4>
<?php
$array5 = [];
$id = [];
for ($i = 0; $i < 10; $i++) {
    do {
        $userId = rand(1, 1000000);
    } while (in_array($userId, $id));
    $placeInRow = rand(0, 100);
    $id[] = $userId;
    $array5[$i] =['user_id' =>$userId , 'place_in_row'=> $placeInRow];
}

_d($array5);
_dc($array5);
_dc($id);
?>

<h4> 6. Išrūšiuokite 5 užduser_idavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
</h4>
<?php

usort($array5, function($a, $b){
   return $a['user_id'] <=> $b['user_id'];
});

_dc($array5);

usort($array5, function($a, $b){
    return $b['place_in_row'] <=> $a['place_in_row'];
});
_dc($array5);
?>

<h4>7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
</h4>

<?php
$name = '';
$surname = '';
for ($i=0; $i < count($array5); $i++) { 
    $nameLength = rand(5,15);
   for($j = 0; $j<$nameLength; $j++){
    $name.= chr(rand(65,90));
   }
   $surnameLength = rand(5,15);
   for ($k=0; $k <$surnameLength ; $k++) { 
       $surname .= chr(rand(65,90));
   }
     $array5[$i]+= ['name'=> $name, 'surname' => $surname]; 
        $name = ''; 
        $surname = '';
}
_dc($array5);
_d($array5);
?>

<h4> 8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.
 </h4>

<?php

$masyvas8 = [];
 
for( $i= 0; $i < 10; $i++){
    $masyvoIlgis = rand(0,5);
    if ($masyvoIlgis == 0 ){
        $masyvas8[$i]= rand(0,10);
    } else {
        for ($j=0; $j<$masyvoIlgis ; $j++) { 
            $masyvas8[$i][] = rand(0,10);
        }
    }
    
}
_dc($masyvas8);
_d($masyvas8);
?>

<h4>9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.
</h4>

<?php

$sum = 0;
foreach ($masyvas8 as $value) {
    if (is_array($value)) {
        $sum += array_sum($value); 
    } else {
        $sum += $value; 
    }
}
echo "Visu reiksmiu suma = $sum.";


usort($masyvas8, function ($a, $b) {
    if (is_array($a)) {
        $a = array_sum($a);
    }
    if (is_array($b)) {
        $b = array_sum($b);
    }
    return $a <=> $b;
});
_dc($masyvas8);
?>

<h4>10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.
</h4>
<?php

$array10 = [];
$simboliai = ['#', '%', '+', '*', '@', '裡'];
foreach(range(1,10)as $key => $val ) {
    foreach(range(1,10) as $key2 =>$val2){
        $spalva = '#';
        foreach(range(1,6) as $key3 => $val3){
            $spalva .= rand(0,9);

        }
        $array10[$key][$key2] = ['value' => $simboliai[rand(0,5)], 'color' => $spalva];
    }

}
_dc($array10);

echo '<pre>';
print_r($array10);
echo '</pre>';
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "<span style='color:".$array10[$i][$j]['color']."; padding:10px;'>".$array10[$i][$j]['value']."</span>";
    }
    echo "<br>";
}
echo '<br><br>';

