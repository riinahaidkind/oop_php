


/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 18.12.2018
 * Time: 10:28
 */

<?php
print_r($_POST);


if(empty($_POST)){
    echo '<a href="vorm.php">Logi sisse!</a>';
//    echo '<a href="vorm.php">Logi sisse!</a>';
    header('Location: vorm.php');
} else {
    foreach ($_POST as $element) {
        if (empty($element)) {
            echo 'Andmed tuleb sisestada ka!<br>';
            echo '<a href="vorm.php">Proovi uuesti!</a>';
            exit;
        }
    }
    echo 'kasutajanimi = ' . $_POST['username'] . '<br>';
    echo 'parool = ' . $_POST['passwd'] . '<br>';
    echo 'Tere tulemast ' . $_POST['username'] . '!<br>';
}