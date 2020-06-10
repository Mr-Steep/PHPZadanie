<?php
$link = mysqli_connect('localhost','root','root','base_italy');

if(mysqli_connect_errno())
{
    echo 'Ошибка в подключении к БД('.mysql_connect_errno.'): '. mysqli_connect_error();
    exit();
}
