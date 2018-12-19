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
    session_destroy();//lõpetame veateate sessiooni
    session_start();//alustan sisselogitud kasutaja sessiooni
    session_regenerate_id();//määrame sessioonile uus ID

    echo session_id();
    $_SESSION['username'] = $_POST['username'];

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo 'Oled sisse loginud, '.$_SESSION['username'];
    echo '<br>';
    echo '<a href="logout.php">Logi välja</a>';
}