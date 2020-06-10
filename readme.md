# Тестовое задание 
  сторого не судите )
# 1. Реализовать два класса: First и Second 
  2 класса и 3 метода
 ```sh
class First
{
    public function getClassname()
    {
        $name_class = get_class($this);
        echo $name_class;
    }

    public function getLetter()
    {
        echo "A";
    }
}

class Second extends First
{
    public function getLetter()
    {
        echo "B";
    }
}
```


# 2. Реализовать два класса: First и Second 
Реализовал 2 функции, одна выбирает текст, вторая выбирает цвет без выбранного цвета первой функции

```sh
function color_chis()
{
    $array_color = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
    $chi = rand(0, 9);
   return $array_color[$chi];
}
function color_text($ind)
{
    $array_color = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
    foreach($array_color as $key => $item){
        if ($item == $ind){
            unset($array_color[$key]);
        }
    }
    $chi = rand(0, 8);
    return ($array_color[$chi]);
}
```



# 2. Реализовать два класса: First и Second 
Реализовал 2 функции, одна выбирает текст, вторая выбирает цвет без выбранного цвета первой функции

```sh
function color_chis()
{
    $array_color = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
    $chi = rand(0, 9);
   return $array_color[$chi];
}
function color_text($ind)
{
    $array_color = array("red", "blue", "green", "yellow", "lime", "magenta", "black", "gold", "gray", "tomato");
    foreach($array_color as $key => $item){
        if ($item == $ind){
            unset($array_color[$key]);
        }
    }
    $chi = rand(0, 8);
    return ($array_color[$chi]);
}
```

# 3.Реализовать консольный скрипт на php, который в качестве параметра будет 
 скрипт добавляем в файл(он так же есть в /zad/zadanie_3) 
 
 передаем из коносоли строку
 
 [имя файла].php “1 -2 -3 4 5 -6f ss3 0 0 0 -0 0.0 0.05”
 
```
<?php
$str = $argv[1];
$pieces = explode(" ", $str);
$new_mas = array();
$new = array();

$regexp = "/\d+[a-z]/";

for ($x = 0; $x < count($pieces); $x++) {
    if (!preg_match($regexp, $pieces[$x])) {
        $new_mas[$x] = intval($pieces[$x]);
    }
}
$result = array_unique($new_mas);
sort($result);

for ($x = 0; $x < count($result); $x++) {
    echo "$result[$x] ";
};
?>
```
 
 
# 3.Используя https://simplehtmldom.sourceforge.io/ сделать скрипт, который достаёт из Архива результатов Серии А все места заданной команды по сезонам (Например Удинезе)
    https://terrikon.com/football/italy/championship/ 
    Передача имени команды осуществляется через POST-форму 

через simplehtmldom спарсил данные в бд
Я через input получаю post-запросом введееные данные и обращаюсь в бд, Ajax, 
типо простенький фильтр без перезагрузки стр 
```
$html = file_get_html("https://terrikon.com/football/italy/championship/");
$ret = $html->find('div[id=champs-table]');
$es = $html->find('div[id=champs-table] td');
$query = "CREATE TABLE base_italy(
  ID   INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Country VARCHAR (20) NOT NULL,
  I VARCHAR (20) NOT NULL,
  B VARCHAR (20) NOT NULL,
  H VARCHAR (20) NOT NULL,
  P1 VARCHAR (20) NOT NULL,
  Z VARCHAR (20) NOT NULL,
  P2 VARCHAR (20) NOT NULL,
  O VARCHAR (20) NOT NULL
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

for ($x = 0; $x <= count($es); ++$x) {
    if ($x % 10 == 1) {
        $country = substr(strval($es[$x]->plaintext),1);
    } elseif ($x % 10 == 2) {
        $val_I = strval($es[$x]->plaintext);
    } elseif ($x % 10 == 3) {
        $val_B = strval($es[$x]->plaintext);
    } elseif ($x % 10 == 4) {
        $val_H = strval($es[$x]->plaintext);
    } elseif ($x % 10 == 5) {
        $val_P1 = strval($es[$x]->plaintext);
    } elseif ($x % 10 == 6) {
        $val_Z = strval($es[$x]->plaintext);
    } elseif ($x % 10 == 8) {
        $val_P2 = strval($es[$x]->plaintext);
    } elseif ($x % 10 == 9) {
        $val_O = strval($es[$x]->plaintext);
    } elseif ($x % 10 == 0 && $x > 0) {

       $query = "INSERT INTO base_italy (`Country`, `I`, `B`, `H`, `P1`, `Z`, `P2`, `O`)"
            . " VALUES ('$country', '$val_I', '$val_B', '$val_H', '$val_P1', '$val_Z', '$val_P2', '$val_O')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    }
};

$pre = $_POST['name_country'];
$link = mysqli_connect('localhost', 'root', 'root', 'base_italy');
$sql = "SELECT * FROM `base_italy` WHERE `Country` = \"$pre\"";

$result = mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
$cat = mysqli_fetch_assoc($result);
?>
```

# 5. Выполнить запросы к данной БД. Исходные данные: изначально у всех людей из таблицы persons было по 100 рублей. 
  Передача денег из таблицы transactions отражает кто (from) кому(to) сколько денег передал.
  
  а) написать запрос, который бы выводил полное имя и баланс человека на данный момент
  
  б) написать запрос, который бы выводил город, представители которого участвовали в передаче денег наибольшее количество раз
  
  в) написать запрос, отражающий все транзакции, где передача денег осуществлялась между представителями одного города



```
SELECT persons.fullname , SUM(transactions.amount)
FROM persons JOIN transactions ON transactions.to_person_id = persons.id
GROUP BY  persons.fullname

SELECT c.name
FROM cities c
LEFT JOIN  persons p ON c.id = p.city_id
JOIN transactions t on p.id = t.from_person_id OR p.id = t.to_person_id
GROUP BY (c.name)
ORDER BY(COUNT(c.name)) DESC 
LIMIT 1


SELECT * FROM cities c, persons p, transactions t 
WHERE c.id = p.city_id AND
 t.from_person_id = p.city_id 
 OR c.id = p.city_id AND t.to_person_id = p.city_id
 
