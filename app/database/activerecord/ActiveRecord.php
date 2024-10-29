<?php

namespace app\database\activerecord;

use app\database\interfaces\ActiveRecordInterface;
use app\database\interfaces\InsertInterface;
use app\database\interfaces\UpdateInterface;


use ReflectionClass;

abstract class ActiveRecord implements ActiveRecordInterface
{

    protected $table = null;

    protected $attributes = [];

    public function __construct()
    {
        if (!$this->table) {
            $this->table = strtolower((new ReflectionClass($this))->getShortName());
            var_dump($this->table);

        }
    }

    public function __set($attribute, $value)
    {
        $this->attributes[$attribute] = $value;
    }

    public function __get($attribute){
        return $this->attributes[$attribute];
    }

    public function getTable(){
        return $this->table;
    }

    public function getAttributes(){
        return $this->attributes;
    }

    public function update(UpdateInterface $updateInterface){
        return $updateInterface->update($this);
    }
    public function insert(InsertInterface $insertInterface){
        return $insertInterface->insert($this);
    }
    public function delete(){

    }
    public function find(){

    }
    public function findBy(){

    }
    public function all(){

    }
}