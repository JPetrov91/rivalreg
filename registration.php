<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 

$connect = mysqli_connect('localhost', 'root', '', 'rivalreg');

mysqli_query($connect,"SET NAMES utf8");
if(!$connect) exit('Ошибка подключения');

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = 'INSERT INTO users (login, password) VALUES ($username, $password)';
	$result = mysqli_query($connect, $query);
}

 ?>


<form method="post" action="registration.php" > <br>
	Name: <input type="text" name="username"><br>
	Password: <input type="text" name="password"><br>
	E-Mail: <input type="text" name="email"><br>
	<input type="submit" name="submit" value="Register">
</form>
<?php 
	var_dump($result);
 ?>