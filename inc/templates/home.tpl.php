<!-- dynamic article display  -->
<?php foreach($articlesList as $currentId => $currentArticle): ?>
  <article class="card">
    <div class="card-body">
      <h2 class="card-title"><a href="#"><?= $currentArticle->title ?></a>Title</h2>
      <p class="card-text"><?= $currentArticle->content ?></p>
      <p class="infos">
          Posté par <a href="#" class="card-link"><?= $currentArticle->author ?></a> le <time><?= $currentArticle->getDateFr() ?></time> dans <a href="#" class="card-link"><?= $currentArticle->category ?></a>
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