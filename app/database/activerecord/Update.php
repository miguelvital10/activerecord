<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordExecuteInterface;
use app\database\interfaces\ActiveRecordInterface;

class Update implements ActiveRecordExecuteInterface
{
    public function execute(ActiveRecordInterface $activeRecordInterface)
    {
        $this->createQuery($activeRecordInterface);
    }

    private function createQuery(ActiveRecordInterface $activeRecordInterface)
    {
        $sql = "update {$activeRecordInterface->getTable()} set ";

        foreach ($activeRecordInterface->getAttributes() as $key => $value) {
            if ($key !== 'id') {
                $sql .= "{$key}=:{$key},";
            }

            $sql = rtrim($sql, ',');
            $sql .= " where id = :id";
        }

        return $sql;
    }
}