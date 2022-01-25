<?php

//namespace app\engine;

class Db
{
    public function queryOne($sql) {
        return $sql;
    }

    public function queryAll($sql) {
        return $sql;
    }

    public function execute($sql) {
        echo "update";
    }
}