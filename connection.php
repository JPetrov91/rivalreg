<?php
include_once 'config.php';

$host = $config['host'];
$user = $config['user'];
$password = $config['password'];
$db = $config['db'];

$connection = mysqli_connect($host, $user, $password, $db);

$query = "SELECT * FROM `users` WHERE `id`=1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
