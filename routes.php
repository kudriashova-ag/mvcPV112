<?php
$routes = [
    '/'         => ['MainController', 'home'],
    'contacts'  => ['MainController', 'contacts'],
    'article/add' => ['ArticleController', 'add'],
    'article/store' => ['ArticleController', 'store'],
    'article/(\d+)' => ['ArticleController', 'show'],
];