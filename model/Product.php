<?php

//namespace app\model;

class Product extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;


    public function getTableName() {
        return 'product';
    }

}