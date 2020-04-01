<!-- dynamic article display  -->
<?php foreach($articlesList as $currentId => $currentArticle): ?>
  <article class="card">
    <div class="card-body">
      <h2 class="card-title"><a href="index.php?page=article&id=<?= $currentId ?>"><?= $currentArticle->title ?></a></h2>
      <p class="card-text"><?= $currentArticle->content ?></p>
      <p class="infos">
        Posté par <a href="index.php?page=author&id=<?= $currentArticle->author ?>" class="card-link"><?= $authors[$currentArticle->author]->name ?></a> le <time><?= $currentArticle->getDateFr() ?></time> dans <a href="index.php?page=category&id=<?= $currentArticle->category ?>" class="card-link"><?= $categories[$currentArticle->category]->name ?></a>
      </p>
    </div>
  </article>
<?php endforeach ?>

<!-- Pagination -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-between">
    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-arrow-left"></i> Précédent</a></li>
    <li class="page-item"><a class="page-link" href="#">Suivant <i class="fas fa-arrow-right"></i></a></li>
  </ul>
</nav>