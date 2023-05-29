<?php
header('Content-Type: text/html; charset = utf-8');

$fullName = null;
$adres = null;
$city = null;
$dops = null;

/*
setcookie('fullName', $fullName, time() + 3600);
setcookie('adres', $adres, time() + 3600);
setcookie('city', $city, time() + 3600);
setcookie('check', $dops, time() + 3600);
*/

if (isset($_POST['fullName'])) {
    $fullName = $_POST['fullName'];
}
if (isset($_POST['adres'])) {
    $adres = $_POST['adres'];
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
}
if (isset($_POST['check'])) {
    $dops = $_POST['check'];
} else $dops = "Дополнительные услуги не выбраны.";




echo "<div>
<h1>Заказ оформлен</h1><br>
Имя заказчика: $fullName <br>
Адрес заказчика: $adres <br>
Город: $city <br>
Дополнительные услуги: </div>";

foreach ($dops as $dop) {
    echo $dop . " ";
}
