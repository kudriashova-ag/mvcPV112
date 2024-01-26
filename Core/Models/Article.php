<?php
namespace Core\Models;

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

    function getCategory() {
        return Category::find( $this->category_id );
    }
}
