<div class="container">
    <h1><?= $article->title ?></h1>

    <div class="text-primary"><?= $article->getCategory()->name ?></div>

    <div>
        <?= $article->content ?>
    </div>


</div>