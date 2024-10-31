<?php

use app\database\activerecord\Find;
use app\database\activerecord\Update;
use app\database\activerecord\Insert;
use app\database\models\User;

require '../vendor/autoload.php';

$user = new User;

$user->firstName = 'Miguel';
$user->lastName = 'Vital';
$user->id = 1;

echo $user->execute(new Find);
