<?php 
namespace Core\Controllers;

use Core\Models\Article;
use Core\Models\Category;
use Core\View;

class ArticleController extends Controller{
    function add() {
        $articles = Article::all();
        $categories = Category::all();

        View::render('articles/create', compact('articles', 'categories'));
    }

    function store() {
        $article = new Article();
        $article->title = $_POST['title'] ?? '';
        $article->content = $_POST['content'] ?? '';
        $article->category_id = $_POST['category_id'] ?? '';
        $article->save();

        self::redirect('/article/add');
    }


    function show($id) {
        $article = Article::find($id);
        View::render('articles/show', compact('article'));
    }


}