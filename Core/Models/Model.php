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

    public function save()
    {
        $reflection = new \ReflectionObject($this);
        $properties = $reflection->getProperties();

        $props = []; // ['id', 'title', 'content', 'category_id']
        $propsToAdd = [];
        $propsToUpdate = [];
        foreach($properties as $p){
            $name = $p->name;
            $props[] = $name;
            $propsToAdd[$name] = $this->$name;
            $propsToUpdate[] = "$name=:$name";
        }

        if($this->id){
            $sql = "UPDATE " . static::getTable() . " SET " . implode(', ', $propsToUpdate) . " WHERE id=:id";
        }
        else{
            $sql = "INSERT INTO ". static::getTable() ." (" . implode(', ', $props). ") VALUES (:" . implode(', :', $props) . ")";
        }
        
        $db = Db::getInstance();
        $db->query($sql, $propsToAdd);
    }


    public static function find(int $id){
        $pdo = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::getTable() . ' WHERE id=?';
        $result = $pdo->query($sql, [$id], static::class);
        return $result ? $result[0] : null;
    }


}