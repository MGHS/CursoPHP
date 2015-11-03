<?php 

include 'vendor/autoload.php';

$select = new MGHS\QueryBuilder\Mysql\Select;
var_dump($select->sql());
