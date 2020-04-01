<!-- $article is the information source for this template -->
<!-- $article content value of instance from article class -->
<article class="card">
  <div class="card-body">
    <h2 class="card-title"><a href="#"><?= $article->title ?></a>Title</h2>
    <p class="card-text"><?= $article->content ?></p>
    <p class="infos">
      Posté par <a href="index.php?page=author&id=<?= $article->author ?>" class="card-link"><?= $authors[$article->author]->name ?></a> le <time><?= $article->getDateFr() ?></time> dans <a href="index.php?page=category&id=<?= $article->category ?>" class="card-link"><?= $categories[$article->category]->name ?></a>
    </p>
  </div>
</article> 

    </p>
  </div>
</article>