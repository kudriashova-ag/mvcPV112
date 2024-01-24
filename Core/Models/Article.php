<?php
namespace Core\Models;

use Services\Db;

class Article extends Model
{
    public $id;
    public $title;
    public $content;
    public $category_id;

    public static function getTable()
    {
        return 'articles';
    }
}
