<?php
namespace Core\Controllers;

use Core\Models\Article;
use Core\Models\Category;
use Core\View;


class MainController extends Controller{
    public function home() : void
    {

        $name = 'Music';

        $category = new Category();
        $category->name = $name;
        $category->save(); // to DB


        $categories = Category::all();
        self::dump($categories);

        $title = 'Main Page';
        View::render('home', compact('title', 'categories'));
    }

    public function contacts(): void
    {
        View::render('main/contacts');
    }
}


