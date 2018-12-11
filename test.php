<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 11.12.2018
 * Time: 9:41
 */

// Ülesanne 1
/* Loo programm, mille sees:
a) defineeritud muutujate abil
    Sinu ees- ja perenimi
    kursuse tähis
    kursuse number
    Sinu kooli email
b) Väljastatud muutujate väärtused koos sobiva tekstiga html faili kujul
*/



// muutujate defineerimine
// $muutujaNimi = väärtus;
$eesNimi = 'Riina';
$pereNimi = 'Häidkind';
$kursuseTahis = 'KD';
$kursuseNumber = '18';
$kooliEmail = 'riina.haidkind@khk.ee';

// muutujate sisu testvaatamine
//var_dump($lehePealkiri);
//echo '<br>';
//var_dump($sisuPealkiri);
// andmetüübid
$taisarv = 7;
$reaalarv = -2.6;
$tekst = 'Tere PHP';
$toevaartusTrue = true;
$toevaartusFalse = false;
// väärtuse tüübi kontroll - gettype($muutujaNimi)
// väärtuse tüübi teisendus - settype($muutujaNimi, 'tüüp')
// väljastamine
// ühendamine 'tekst katkeb '.$muutujaNimi.' tekst jätkub'
echo '
    <!doctype html>
    <html>
        <body>
            <ul>
                <li>$eesNimi = '.$eesNimi.' </li>
                <li>$pereNimi = '.$pereNimi.' </li>
                <li>$kursuseTahis = '.$kursuseTahis.' </li>
                <li>$kursuseNumber = '.$kursuseNumber.' </li>
                <li>$kooliEmail = '.$kooliEmail.' </li>
            </ul>
        </body>
    </html>
';
?>
