<?php

require '../vendor/autoload.php';

use app\database\activerecord\Find;
use app\database\activerecord\Update;
use app\database\activerecord\Insert;
use app\database\models\User;


$user = new User;

$user->firstName = 'Sandra';
$user->lastName = 'Santos';
 
var_dump($user->execute(new Update(field:'id', value:'1')));
