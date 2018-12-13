<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 13.12.2018
 * Time: 11:04
 */
require_once './Tabel.php';
class HTMLTabel extends Tabel
{
    /**
     * HTMLTabel constructor.
     */
    public function __construct()
    {
        echo 'HTML';
        parent::__construct();
    }
/**vaata tabel massiiv foreach abil ridade kaupa
 * väljasta HTML tabeli kujul
 */
    function naitaTabel()
    {
   echo '<table border="1">';
   foreach ($this->tabel as $rida){
       echo '<tr>';
       foreach ($rida as $element){
           echo '<td>'.$element.'</td>';
       }
       echo '</tr>';
   }
   echo '</table>';
    }

}