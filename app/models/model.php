<?php
namespace app\models;

class Model{
    public $pdo;
    public function __construct()
    {
        $dsn = 'mysql:dbname=cart;host=127.0.0.1';
        $user = 'root';
        $password = 'root';
        $this->pdo = new \PDO($dsn, $user, $password);
    }
}