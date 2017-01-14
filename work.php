<?php

include_once('sql.php');

$Connect = mysqli_connect(HOST, USER, PASSWORD, DB);

mysqli_query($Connect,"SET NAMES utf8");
if(!$Connect) exit('Ошибка подключения');

$Row = mysqli_fetch_assoc( mysqli_query($Connect, 'SELECT * FROM `users` WHERE `id` = 1'));



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

<div class="margin"><h1>Региональные фабрики, ресурсы: 38.33, 59.09, 302.41 , 1.00	, 1.00

</h1></div>


<div class="work1">
  <div class="work_source_1">Золотоносная шахта, опыт: 15200 Ед.
</div>
<div class="work_mini"><div class="work_icon1"></div>
<div class="work_mini2">Энергия:


 <div class="dd-selected"><select>
  <option>-10э</option>
  <option>-20э</option>
 </select></div>

</div>

</div>
<div class="button_blue1">Работать, +1.867.140 R, +1 G</div>

</div>

<div class="work1">
  <div class="work_source_1">Нефтяная вышка, опыт: 24942	Ед.</div>
<div class="work_mini"><div class="work_icon2"></div>

<div class="work_mini2">Энергия:

<div class="dd-selected"><select>
  <option>-10э</option>
  <option>-20э</option>
</select></div>
</div>


</div>
<div class="button_blue1">Работать, +1.867.140 R, +1 G</div>

</div>

<div class="work1">
  <div class="work_source_1">Рудный карьер, опыт: 27453	Ед.
</div>
<div class="work_mini"><div class="work_icon3"></div>

<div class="work_mini2">Энергия:

<div class="dd-selected"><select>
  <option>-10э</option>
  <option>-20э</option>
</select></div>
</div>

</div>

<div class="button_blue1">Работать, +1.867.140 R, +1 G</div>

</div>


</div>

</body>
</html>