<?php

require '../vendor/autoload.php';

use app\database\activerecord\FindAll;
use app\database\models\User;

$user = new User;
 
var_dump ($user->execute(new FindAll(fields:'id')));

