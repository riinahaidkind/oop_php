<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 11.12.2018
 * Time: 9:41
 */

echo '<html><head><title>Ülesanded</title></head><body>';
// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/
echo '<h4>Ülesanne 1</h4>';
$eesNimi = 'Riinaa';
$pereNimi = 'Häidkind';
$osakond = 'KD';
$email = 'riina.haidkind@khk.ee';
echo 'Eesnimi '.$eesNimi.'<br>';
echo 'Perenimi '.$pereNimi.'<br>';
echo 'Osakond '.$osakond.'<br>';
echo 'email '.$email.'<br>';
echo '<hr>';
// Ülesanne 2
/* Loo muutuja nimega varv, mille algväärtuseks pane 'punane';
Koosta if-else if- else lause, mis väljastab teksti "Värviline tekst"
vastavalt määratud väärtusega. Katseta vähemalt kolme HTML värviga -
red, blue, orange - vastavalt tingimuslauses määra punane, sinine ja orange
*/
echo '<h4>Ülesanne 2</h4>';
$varv = 'roheline';
if($varv == 'punane'){
    echo '<p style="color: red;">Värviline tekst</p>';
} else if($varv == 'sinine'){
    echo '<p style="color: blue;">Värviline tekst</p>';
} else if($varv == 'orange'){
    echo '<p style="color: orange;">Värviline tekst</p>';
} else {
    echo '<p>Värviline tekst</p>';
}
echo '</body></html>';


echo '<h4>Ülesanne 3</h4>';

/*
 *
 */
echo '
    <!doctype html>
    <html>
        <head>
            <title>Tsüklid</title>
            <link rel="stylesheet" type="text/css" href="katsestyle.css">
        </head>
        <body>';
//tsüklid
//for
/*
 * for ($juhtimisM=algväärtus; $juhtimisM < lõppväärtus; $juhtimisM++) {
 * tegevused, mis toimuvad nii kaua, kui $juhtimisM < lõppväärtus kehtib
 * }
 *
 */
echo '<table>';
$ridadeArv = 6;
$veergudeArv = 5;
for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
    echo '<tr>';
    for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
        $varv = '#';
        for ($i = 1; $i <= 6; $i++){
            $varv = $varv.dechex(rand(0, 16));
        }
        echo '<td style="background-color: '.$varv.'">';
        echo $veeruNumber;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

//Ülesanne 4
/* muuda htmlTabel() funktsiooni nii et see võtaks parameetrina numbrite masiivi ja väljastaks HTML tabelina
*/

echo '<h4>Ülesanne 4</h4>';
function htmlTabel ($massiiv)
{
    echo'<table>';
    for ($reaNumber = 0; $reaNumber < count($massiiv); $reaNumber++) {
        echo '<tr>';

        for ($veeruNumber = 0; $veeruNumber < count($massiiv[$reaNumber]); $veeruNumber++) {
            echo '<td>';
            echo $massiiv[$reaNumber][$veeruNumber];
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

$numbrid = array(
    array(1, 2, 3),
    array(4, 5, 6)
);
htmlTabel($numbrid);
echo '<br>';
$sümbolid = array(
    array('a', 'b'),
    array('d', 'e'),
    array('g','h')
);
htmlTabel($sümbolid);
echo '</body></html>';






