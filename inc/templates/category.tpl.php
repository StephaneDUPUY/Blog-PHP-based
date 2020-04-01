<h1><?= $category->name ?></h1>

<?php foreach ($articlesList as $currentId => $currentArticle) : ?>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="index.php?page=article&id=<?= $currentId ?>"><?= $currentArticle->title ?></a>
            <a href="index.php?page=author&id=<?= $currentArticle->author ?>"><span class="badge badge-light badge-pill"><?= $authors[$currentArticle->author]->name ?></span></a>
            <span class="badge badge-secondary badge-pill"><?= $currentArticle->getDateFr() ?></span>
        </li>
    </ul>
<?php endforeach ?> 