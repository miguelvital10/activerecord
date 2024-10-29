<?php

namespace app\database\activerecord;

use app\database\interfaces\InsertInterface;
use app\database\interfaces\ActiveRecordInterface;

class Insert implements InsertInterface
{
    public function insert(ActiveRecordInterface $activeRecordInterface){
        return 'insert';
    }
}