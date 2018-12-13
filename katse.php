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
$nimed = array();
$nimed[] = 'Anna';
$nimed[] = 'Elen';
var_dump($nimed);
echo '<pre';
print_r($nimed);
echo '<pre>';

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