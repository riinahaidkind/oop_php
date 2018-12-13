<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 06.12.2018
 * Time: 11:09
 */

// muutujate defineerimine
// $muutujaNimi = väärtus;

//massiivid
//array()
/*
// * $massiiv = array (); // tühi massiiv = ei ole sees midagi
$massiiv[] = väärtus;
 */

//massiivi loomine
$numbrid = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9),
);
//massiivi sisu testkontroll
var_dump($numbrid);
echo '<pre>';
print_r($numbrid);
echo '</pre>';
//massiivi sisendi väljastamine
echo $numbrid[1][1];

//massiivi suuruse kontroll = meil on see ridade arv
$ridadeArv = count($numbrid);
echo $ridadeArv;
echo'<br>';
$veergudeArv = count($numbrid[0]);
echo'<br>';


// massiivi väljastamine for abil
for($reaNumber = 0; $reaNumber < $ridadeArv; $reaNumber++){
    for($veeruNumber = 0; $veeruNumber < $veergudeArv; $veeruNumber++){
        echo $numbrid[$reaNumber][$veeruNumber].'&nbsp;';
    }
    echo '<br>';
}

//massiivi väljastamine foreach abil, peab teadma struktuuri
foreach ($numbrid as $rida) {
    foreach ($rida as $number){
        echo $number.'&nbsp;';
    }
    echo '<br>';
}

function htmlTabel ($ridadeArv = 0, $veergudeArv = 0) {
    $table = '<table>';
        for ($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++) {
        $table = $table.'<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            $table = $table.'<td>';
            $table = $table.$veeruNumber;
            $table = $table.'</td>';
        }
            $table = $table.'</tr>';
    }
    $table = $table.'</table>';
        return $table;
}
//lehe sisu väljastamine
echo '
    <!doctype html>
    <html>
        <head>
            <title>Funktsioonid</title>
            <link rel="stylesheet" type="text/css" href="katsestyle.css">
        </head>
        <body>';
//kutsume funktsiooni tööle
$table1 = htmlTabel(4, 4);
echo $table1;
echo '<hr>';
$table2 = htmlTabel(2,5);
echo $table2;
echo '<hr>';
htmlTabel();
echo htmlTabel(1, 3);
echo '</body></html>';
?>