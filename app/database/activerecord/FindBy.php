<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordExecuteInterface;
use app\database\interfaces\ActiveRecordInterface;

class FindBy implements ActiveRecordExecuteInterface
{
    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
    }

    public function createQuery(ActiveRecordExecuteInterface $activeRecordExecuteInterface)
    {

    }
}