<?php

require '../vendor/autoload.php';

use app\database\activerecord\Delete;
use app\database\activerecord\Insert;
use app\database\models\User;

$user = new User;
 
echo $user->execute(new Delete(field:'id', value:4));

