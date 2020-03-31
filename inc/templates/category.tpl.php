<h1><?= $category->name ?></h1>

<?php foreach ($articlesList as $currentId => $currentArticle) : ?>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="index.php?page=article&id=<?= $currentId ?>"><?= $currentArticle->title ?></a>
            <span class="badge badge-light badge-pill"><?= $currentArticle->author ?></span>
            <span class="badge badge-secondary badge-pill"><?= $currentArticle->getDateFr() ?></span>
        </li>
    </ul>
<?php endforeach ?> 