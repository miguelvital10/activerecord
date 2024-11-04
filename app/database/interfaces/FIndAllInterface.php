<?php

namespace app\database\interfaces;

interface FindAllInterface
{
    public function findAll(ActiveRecordInterface $activeRecordInterface);
}