<?php 

namespace app\database\models;

use app\database\activerecord\ActiveRecord;
use app\database\activerecord\ActiveRecordUser;

class User extends ActiveRecordUser
{
    protected $table = 'users';
}