<?php
namespace Core\Models;

use Services\Db;

class Category extends Model{
    public $id;
    public $name;

    public static function getTable(){
        return 'categories';
    }

    public function save(){
        $sql = "INSERT INTO categories (name) VALUES (:name)";
        $db = Db::getInstance();
        $db->query($sql, ['name' => $this->name]);
    }
}