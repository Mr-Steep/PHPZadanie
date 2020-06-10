<?php
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
$el1 = color_chis();
$el2 = color_chis();
$el3 = color_chis();
$el4 = color_chis();
$el5 = color_chis();
$el6 = color_chis();
$el7 = color_chis();
$el8 = color_chis();
$el9 = color_chis();
$el10 = color_chis();
$el11= color_chis();
$el12 = color_chis();
$el13 = color_chis();
$el14 = color_chis();
$el15 = color_chis();
$el16 = color_chis();
$el17 = color_chis();
$el18 = color_chis();
$el19 = color_chis();
$el20 = color_chis();
$el21 = color_chis();
$el22 = color_chis();
$el23 = color_chis();
$el24 = color_chis();
$el25 = color_chis();