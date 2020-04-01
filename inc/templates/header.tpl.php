<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Font loaded -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">
        <!-- -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- Bootstrap loaded -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Le blog des devs</title>
    </head>
    <body>
        <!-- HEADER -->
        <header>
            <!-- NAV -->
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">A la dérive</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Menu <span class="navbar-toggler-icon"></span>
                </button>
                <!-- part masked in mobile version -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <!-- dynamic categories display -->
                        <?php foreach($categories as $categoryId => $categoryObj): ?>
                            <li class="nav-item">
                                <!-- dynamic links with name -->
                                <a class="nav-link" href="index.php?page=category&id=<?= $categoryId ?>"><?= $categoryObj->name ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </nav>
            <section class="text-center">
                <h1>A la dérive</h1>
                <hr />
                <p>
                    Un blog collaboratif de développeurs web dérivant au milieu de l'espace
                </p>
            </section>
        </header>

        <div class="container">

            <div class="row">

                <main class="col-lg-9">