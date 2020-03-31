<?php

    // Enter point for home page

    // Classes included
    require 'inc/classes/Article.php';
    require 'inc/classes/Data.php';

    // Data class allow search datas for a dedicated template, so instantiation
    $dataObject = new Data();
    // Retrieve categories
    $categories = $dataObject->getCategories();

    // check if a special page is asked.
    if (!empty($_GET['page'])) {
        $page = trim($_GET['page']);
    }
    // else return to home page
    else {
        $page = 'home';
    }

    // Initialisation of  variable copntening nma of central template correspondig page asked
    $templateName = '';

    // Author page.
    if ($page == 'author') {
        $templateName = 'author';
    }

    // Category page
    else if ($page == 'category') {
        $templateName = 'category';
    }

    // Article page.
    else if ($page == 'article') {
        // retrieve id provided in setting of URL
        if (!empty($_GET['id'])) {
            $articleId = intval(trim($_GET['id']));
        }
        else {
            $articleId = 0;
        }

        // in ternary version :
        // $articleId = !empty($_GET['id']) ? intval(trim($_GET['id'])) : 0;

        // retrieve article object from id provided
        $article = $dataObject->getArticle($articleId);
        $templateName = 'article';
    }

    // Home page
    else if ($page == 'home') {
        // retrieve array of articles
        $articlesList = $dataObject->getArticles();

        $templateName = 'home';
    }

    // and then final content of HTTP answer
    require __DIR__.'/inc/templates/header.tpl.php';
    require __DIR__.'/inc/templates/'.$templateName.'.tpl.php';
    require __DIR__.'/inc/templates/footer.tpl.php';