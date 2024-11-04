<?php

namespace app\database\interfaces;

interface FindByInterface
{
    public function findBy(ActiveRecordInterface $activeRecordInterface);
}