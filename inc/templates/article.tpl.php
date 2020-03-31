<!-- $article is the information source for this template -->
<!-- $article content value of instance from article class -->
<article class="card">
  <div class="card-body">
    <h2 class="card-title"><a href="#"><?= $article->title ?></a>Title</h2>
    <p class="card-text"><?= $article->content ?></p>
    <p class="infos">
      Posté par <a href="#" class="card-link"><?= $article->author ?></a> le <time><?= $article->getDateFr() ?></time> dans <a href="#" class="card-link"><?= $article->category ?></a>
    </p>
  </div>
</article>