<?php

require '../vendor/autoload.php';

use app\database\activerecord\FindAll;
use app\database\models\User;
use app\database\activerecord\FindBy;

$user = new User;
 
var_dump ($user->execute(new FindAll(fields:'id, lastName')));

