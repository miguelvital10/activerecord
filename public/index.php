<?php

use app\database\activerecord\Update;
use app\database\models\User;

require '../vendor/autoload.php';

$user = new User;
$user->firstName = 'Miguel';
$user->lastName = 'Vital';
$user->id = 1;
$user->update(new Update);

var_dump($user);
