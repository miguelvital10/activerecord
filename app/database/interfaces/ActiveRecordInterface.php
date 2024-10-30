<?php

namespace app\database\interfaces;

interface ActiveRecordInterface
{
    public function execute(ActiveRecordExecuteInterface $updateInterface);
}