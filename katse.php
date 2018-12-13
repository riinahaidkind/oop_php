<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 06.12.2018
 * Time: 11:09
 */

// muutujate defineerimine
// $muutujaNimi = väärtus;

//funktsioonid
//function
/*
 * function funktsiooniNimi ([$param1, $param2]) {
 * kõik tegevused
 * mis antud funktsiooni sees toimuvad
 * }
 *
 */
function htmlTabel ($ridadeArv, $veergudeArv) {
    echo '<table>';
        for ($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++) {
        echo '<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++) {
            echo '<td>';
            echo $veeruNumber;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
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
htmlTabel(4, 4);
echo '<br>';
htmlTabel(2,5);

echo '</body></html>';
?>