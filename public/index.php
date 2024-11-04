<?php

require '../vendor/autoload.php';

use app\database\models\User;
use app\database\activerecord\FindBy;

$user = new User;
 
var_dump($user->execute(new FindBy(field:'id', value:3, fields:'id,firstName')));

