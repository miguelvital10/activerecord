<?php

use app\database\activerecord\Update;
use app\database\activerecord\Insert;
use app\database\models\User;

require '../vendor/autoload.php';

$user = new User;
$user->update(new Update);
$user->insert(new Insert);

echo $user->insert(new Insert);
