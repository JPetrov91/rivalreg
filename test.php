<?php

include_once('sql.php');

$Connect = mysqli_connect(HOST, USER, PASSWORD, DB);

if(!$Connect) exit('Ошибка подключения');

$Row = mysqli_fetch_assoc( mysqli_query($Connect, 'SELECT * FROM `users` WHERE `id` = 1'));


print"$Row[password]";
?>