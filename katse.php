<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 06.12.2018
 * Time: 11:09
 */

// muutujate defineerimine
// $muutujaNimi = väärtus;
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