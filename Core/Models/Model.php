<?php
namespace Core\Models;

use Services\Db;

abstract class Model{
    abstract public static function getTable();

    public static function all()
    {
        $pdo = Db::getInstance();
        return $pdo->query('SELECT * FROM ' . static::getTable(), [], static::class);
    }
}