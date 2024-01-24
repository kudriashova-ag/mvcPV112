<?php
namespace Core\Models;

use Services\Db;

class Category extends Model{
    public $id;
    public $name;

    public static function getTable(){
        return 'categories';
    }
}