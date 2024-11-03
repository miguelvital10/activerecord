<?php

require '../vendor/autoload.php';

use app\database\activerecord\Insert;
use app\database\models\User;

$user = new User;

$user->firstName = 'Lulu';
$user->lastName = 'Silvano';
 
echo $user->execute(new Insert);
