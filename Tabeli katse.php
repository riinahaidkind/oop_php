<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 13.12.2018
 * Time: 10:45
 */
//lugesin sisse Tabel.php faili sisu sisseehitatud funktsiooniga require
require_once './Tabel.php';
require_once './HTMLTabel.php';
//loome tabeli objekt
$lihtTabel = new Tabel();

//lisame read sisuga
$lihtTabel->lisaRida(array(1,2,3));
$lihtTabel->lisaRida(array(4,5,6));
$lihtTabel->lisaRida(array(7,8,9));
/*var_dump($lihtTabel);
echo '<pre>';
print_r($lihtTabel);
echo '</pre>';*/
//väljastame tabeli
$lihtTabel->naitaTabel();
echo '<br>';

//loome HTML tabeli objekt
$htmlTabel = new HTMLTabel();
// lisame read sisuga
$htmlTabel->lisaRida(array(1,2,3));
$htmlTabel->lisaRida(array(4,5,6));
$htmlTabel->lisaRida(array(7,8,9));
//väljastame lehe
$htmlTabel->naitaTabel();

//https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller MVC ehk model-view-controller