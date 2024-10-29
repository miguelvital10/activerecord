<?php

namespace app\database\interfaces;

interface ActiveRecordInterface
{
    public function update(UpdateInterface $updateInterface);
    public function insert(InsertInterface $insertInterface);
    public function getTable();
    public function getAttributes();
}