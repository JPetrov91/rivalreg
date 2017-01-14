<?php

require __DIR__ . '/autoload.php';


$users = \Models\User::findAll();
var_dump($users);