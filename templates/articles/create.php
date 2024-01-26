<div class="container">
    <h1>Articles</h1>

    <ul>
        <?php foreach ($articles as $article) : ?>
            <li> <a href="/article/<?= $article->id ?>">   <?= $article->title ?>    </a>    </li>
        <?php endforeach ?>
    </ul>





    <form action="/article/store" method="POST">
        <div>
            <input type="text" name="title" placeholder="Title:" class="form-control">
        </div>

        <div class="mt-3">
            <textarea name="content" placeholder="Content:" class="form-control"></textarea>
        </div>

        <div class="mt-3">
            <select name="category_id" class="form-control">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <button class="btn btn-primary mt-3">Save</button>
    </form>

</div>