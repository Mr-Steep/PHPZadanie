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