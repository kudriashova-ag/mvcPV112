<h1 class="text-center mt-5"><?= $title ?></h1>

<a href="/article/pdf" class="btn btn-primary">Download PDF</a>


<?php foreach($categories as $category): ?>

    <h2><?= $category->name ?></h2>

<?php endforeach ?>