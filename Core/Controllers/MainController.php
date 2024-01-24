<?php
namespace Core\Controllers;

use Core\Models\Article;
use Core\Models\Category;
use Core\View;


class MainController extends Controller{
    public function home() : void
    {

        // $name = 'Music';
        // $category = new Category();
        // $category->name = $name;
        // $category->save(); // to DB

        // $title = 'Title1111';
        // $content = 'Content111';
        // $category_id = 1;

        // $article = new Article();
        // $article->title = $title;
        // $article->content = $content;
        // $article->category_id = $category_id;
        // $article->save(); // to DB 


        // $category = Category::find(2);
        // $category->name = 'New name';
        // $category->save();

        // $category = Article::find(2);
        // $category->title = 'New name';
        // $category->content = 'New content';
        // $category->save();

        $categories = Category::all();

        $title = 'Main Page';
        View::render('home', compact('title', 'categories'));
    }

    public function contacts(): void
    {
        View::render('main/contacts');
    }
}


