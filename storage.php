<?php
session_start();
include_once 'connection.php';
//include_once('sql.php');
//
//$Connect = mysqli_connect(HOST, USER, PASSWORD, DB);
//
//mysqli_query($Connect,"SET NAMES utf8");
//if(!$Connect) exit('Ошибка подключения');

$userId = $_SESSION['id'];
$Row = mysqli_fetch_assoc( mysqli_query($connection, "SELECT * FROM `users` WHERE `id` = '$userId'"));

$Stor= mysqli_fetch_assoc( mysqli_query($connection, "SELECT * FROM `storage` WHERE `id` = '$userId'"));




?>



<!DOCTYPE html>
<html>
<head>
	<title>Rival</title>
	<link href="style.css" rel="stylesheet">
        <meta charset="utf-8">

</head>
<body>
        <?php include("menu.php"); ?>


<div class="main">

<div class="margin"><h1>Склад</h1></div>


<div class="storage_item">
  <div class="storage_source_1">Нефть
  </div><? echo $Stor[oil_quant]?> барр.
</div>
<div class="storage_item">
 <div class="storage_source_1">Руда
  </div><? echo $Stor[ore_quant]?> кг</div>
<div class="storage_item">
 <div class="storage_source_1">Энергетики
  </div> <? echo $Stor[energetics]?> </div>
<div class="storage_item"> <div class="storage_source_1">Противотанковые ежи
  </div><? echo $Stor[antitank_quant]?>
</div>
<div class="storage_item"> <div class="storage_source_1">Калаши
  </div><? echo $Stor[gun_quant]?></div>
<div class="storage_item"> <div class="storage_source_1">Ракетные установки
  </div><? echo $Stor[rocket_quant]?></div>
<div class="storage_item"> <div class="storage_source_1">Гранатометы
  </div><? echo $Stor[grenadelaunchers_quant]?>
</div>
<div class="storage_item"> <div class="storage_source_1">Штурмовики
  </div><? echo $Stor[stormtroopers]?>
</div>
<div class="storage_item"> <div class="storage_source_1">
  </div></div>
<div class="storage_item"> <div class="storage_source_1">
  </div></div>
<div class="storage_item"> <div class="storage_source_1">
  </div></div>
<div class="storage_item"> <div class="storage_source_1">
  </div></div>


</div>

</body>
</html>