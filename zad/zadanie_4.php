<?php
ini_set('error_reporting', 0);
ini_set('display_errors)', 0);
ini_set('display_startup_errors', 0);

//require_once 'app/include/simple_html_dom.php';
//$html = file_get_html("https://terrikon.com/football/italy/championship/");
//$ret = $html->find('div[id=champs-table]');
//$es = $html->find('div[id=champs-table] td');
//$query = "CREATE TABLE base_italy(
//  ID   INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//  Country VARCHAR (20) NOT NULL,
//  I VARCHAR (20) NOT NULL,
//  B VARCHAR (20) NOT NULL,
//  H VARCHAR (20) NOT NULL,
//  P1 VARCHAR (20) NOT NULL,
//  Z VARCHAR (20) NOT NULL,
//  P2 VARCHAR (20) NOT NULL,
//  O VARCHAR (20) NOT NULL
//)";
//$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
//
//for ($x = 0; $x <= count($es); ++$x) {
//    if ($x % 10 == 1) {
//        $country = substr(strval($es[$x]->plaintext),1);
//    } elseif ($x % 10 == 2) {
//        $val_I = strval($es[$x]->plaintext);
//    } elseif ($x % 10 == 3) {
//        $val_B = strval($es[$x]->plaintext);
//    } elseif ($x % 10 == 4) {
//        $val_H = strval($es[$x]->plaintext);
//    } elseif ($x % 10 == 5) {
//        $val_P1 = strval($es[$x]->plaintext);
//    } elseif ($x % 10 == 6) {
//        $val_Z = strval($es[$x]->plaintext);
//    } elseif ($x % 10 == 8) {
//        $val_P2 = strval($es[$x]->plaintext);
//    } elseif ($x % 10 == 9) {
//        $val_O = strval($es[$x]->plaintext);
//    } elseif ($x % 10 == 0 && $x > 0) {
//
//        $query = "INSERT INTO base_italy (`Country`, `I`, `B`, `H`, `P1`, `Z`, `P2`, `O`)"
//            . " VALUES ('$country', '$val_I', '$val_B', '$val_H', '$val_P1', '$val_Z', '$val_P2', '$val_O')";
//        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
//    }
//};

$pre = $_POST['name_country'];
$link = mysqli_connect('localhost', 'root', 'root', 'base_italy');
$sql = "SELECT * FROM `base_italy` WHERE `Country` = \"$pre\"";

$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
$cat = mysqli_fetch_assoc($result);
?>

<div class="container">
    <table class="table table-hover">
        <thead>

        <tr>
            <th scope="col">Страна</th>
            <th scope="col">И</th>
            <th scope="col">В</th>
            <th scope="col">Н</th>
            <th scope="col">П</th>
            <th scope="col">З</th>
            <th scope="col">-</th>
            <th scope="col">П</th>
            <th scope="col">O</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><? echo $cat[Country] ?></td>
            <td><? echo $cat[I] ?></td>
            <td><? echo $cat[B] ?></td>
            <td><? echo $cat[H] ?></td>
            <td><? echo $cat[P1] ?></td>
            <td><? echo $cat[Z] ?></td>
            <td>-</td>
            <td><? echo $cat[P2] ?></td>
            <td><? echo $cat[O] ?></td>

        </tr>
</div>