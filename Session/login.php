<?php
/**
 * Created by PhpStorm.
 * User: riina.haidkind
 * Date: 19.12.2018
 * Time: 10:36
 */
session_start(); //alustame anonüümse sessiooniga, saab saata veateate
echo session_id();
echo '<br>';
echo '<div style="color: red">'.$_SESSION['viga'].'</div>';

//välja trükkida sisselogimisvorm ja minna lehele, kus on näha, et olen sisse logitud
//kuna vorm on HTML-is siis tuleb php osa kinni panna
?>
<form method="post" action="login_do.php">
<div>
    <label>Kasutajanimi:</label>
    <input type="text" name="username">
</div>
<div>
    <label>Parool: </label>
    <input type="password" name="passwd">
</div>
<div>
    <input type="submit" value="Logi sisse">
</div>
</form>

