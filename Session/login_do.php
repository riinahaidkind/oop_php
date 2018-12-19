<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 19.12.2018
 * Time: 10:43
 */
session_start(); //jätkame login.php faili sessiooni
if(empty($_POST)) {
    header('Location:login.php');
    $_SESSION['viga'] = 'Täida vormi andmed';
}
else if(empty($_POST['username'])) {
    header('Location:login.php');
    $_SESSION['viga'] = 'Sisesta kasutaja nimi';
}
else if(empty($_POST['passwd'])){
    header('Location:login.php');
    $_SESSION['viga'] = 'Sisesta kasutaja parool';
}
else {
    echo session_id();
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
}