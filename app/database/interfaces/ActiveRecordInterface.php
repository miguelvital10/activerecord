<?php

namespace app\database\interfaces;

use app\database\interfaces\UpdateInterface;

interface ActiveRecordInterface
{
    public function update(UpdateInterface $updateInterface);
    public function getTable();
    public function getAttributes();
}