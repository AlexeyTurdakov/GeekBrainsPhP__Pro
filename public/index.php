<?php
include "../engine/Autoload.php";

//use app\model\{Product, Users};


spl_autoload_register([new Autoload(), 'loadClass']);


$product = new Product(new Db());
$user = new Users(new Db());
