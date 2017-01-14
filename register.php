<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>
<?php
include_once('connection.php');

//$Connect = mysqli_connect(HOST, USER, PASSWORD, DB);

mysqli_query($connection,"SET NAMES utf8");
if(!$connection) exit('Ошибка подключения');


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$query = "INSERT INTO `users`(login, password, email) VALUES ('$username', '$password', '$email')";
	$result = mysqli_query($connection, $query);
	if ($result == true) {
		echo 'Запись в БД создана';
	} else echo 'Error'.' ';
	var_dump($result);
}

 ?>


<form method="post" action="register.php" > <br>
	Name: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>
	E-Mail: <input type="text" name="email"><br>
	<input type="submit" name="submit" value="Register">
</form>
