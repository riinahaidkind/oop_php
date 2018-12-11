<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 06.12.2018
 * Time: 11:09
 */

// muutujate defineerimine
// $muutujaNimi = väärtus;
$lehePealkiri = 'Katse leht';
$sisuPealkiri = 'Muutujate defineerimine';
// tingimuslaused
/*
 * if (tingimus == true) {
 *      siis toimub see osa
 * } else {
 *      muidu toimub see osa
 * }
 * */
$naitaSisu = false;
$naitaPeidetudInfo = false;
echo '
    <!doctype html>
    <html>
        <head>
            <title>'.$lehePealkiri.'</title>
        </head>
        <body>';
        if($naitaSisu == true) {
            echo ' <h1>' . $sisuPealkiri . '</h1>';
    } else if ($naitaSisu == 1) {
            echo 'see on tavaline info';
        } else if($naitaSisu == 0) {
            echo 'see on tavaline peidetud info';
    } else {
        echo 'Kõik on saladus!';
}
// html lehe lõpp
echo '
        </body>
    </html>
';
?>