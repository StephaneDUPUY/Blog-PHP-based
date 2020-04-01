<?php

    // articles objects from Article type
    // Numeration start at 1
    $dataArticlesList = [
        1 => new Article(
            'Ivre, il refait tous les challenges en un week-end sans dormir.',
            'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.',
            3, // Id author index
            '2017-07-13',
            4 // Id category index
        ),
        2 => new Article(
            'POO or not POO, that is the question.',
            'La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.',
            5,
            '2017-07-04',
            1
        ),
        3 => new Article(
            'Git, pour les n00bs.',
            'Un p\'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil de versionning.',
            6,
            '2017-06-19',
            3
        ),
        4 => new Article(
            'Le syndrome de la page blanche',
            'Cette frustration quand le code ne vient pas, le temps passe, la deadline approche...',
            7,
            '2017-05-06',
            4
        ),
    ];

    // The categpries.
    $dataCategoriesList = [
        // ID => objet Category
        1 => new Category('TeamBack'),
        2 => new Category('TeamFront'),
        3 => new Category('Collaboration'),
        4 => new Category('Ma Vie De Dev')
    ];

    // The authors.
    $dataAuthorsList = [
        // ID => objet Author
        1 => new Author('Stéphane'),
        2 => new Author('Emilie'),
        3 => new Author('Jules'),
        4 => new Author('Anaïs'),
        5 => new Author('Franck'),
        6 => new Author('Anne'),
        7 => new Author('Richard')
    ];