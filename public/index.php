<?php

use app\database\models\User;

require '../vendor/autoload.php';

$user = new User;
$user->firstName = 'Miguel';
$user->lastName = 'Vital';
$user->id = 1;

var_dump($user);
