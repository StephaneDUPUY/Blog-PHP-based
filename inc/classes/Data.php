<?php

class Data {
    /**
     * @var Article[]
     */
    private $articlesList;

    /**
     * @var string[]
     */
    private $categoriesList;

    /**
     * @var string[]
     */
    private $authorsList;

    /**
     * At the moment to create object from Data class :
     */
    public function __construct() {
        require 'inc/data.php';
        // store each data form data.php in dedicated object property
        $this->articlesList = $dataArticlesList;
        $this->categoriesList = $dataCategoriesList;
        $this->authorsList = $dataAuthorsList;
    }

    /**
     * Return an array form all Article objects
     *
     * @return  Article[]
     */
    public function getArticles() {
        return $this->articlesList;
    }

    /**
     * Return an Article object from id provided.
     *
     * @param int $id article ID
     * @return Article
     */
    public function getArticle($id) {
        // Check if id exist
        if (array_key_exists($id, $this->articlesList)) {
            // Then return article value from this id
            return $this->articlesList[$id];
        }
        // else return false.
        return false;
    }

    /**
     * Return article list for a dedicated category.
     * 
     * @param int $categoryId ID form catégory
     * @return Article[]
     */
    public function getArticlesByCategoryId($categoryId) {
        // set an empty array to be filled by articles from category
        $articles = [];
        // for each article
        foreach ($this->articlesList as $currentId=>$currentArticle) {
            // if category id match with id passed on setting
            if ($currentArticle->category == $categoryId) {
                // so add article in the array
                $articles[$currentId] = $currentArticle;
            }
        }
        // at the end return the array
        return $articles;
    }

    /**
     * Return article list for a dedicated author.
     *
     * @param int $authorId ID from author
     * @return Article[]
     */
    public function getArticlesByAuthorId($authorId) {
        $articles = [];
        foreach ($this->articlesList as $currentId=>$currentArticle) {
            // if authir id match with id passed on setting
            if ($currentArticle->author == $authorId) {
                $articles[$currentId] = $currentArticle;
            }
        }
        return $articles;
    }

    // Retrieve all categories
    public function getCategories() {
        return $this->categoriesList;
    }

    // Retrieve one category $id based
    public function getCategory($id) {
        // check existence
        if (array_key_exists($id, $this->categoriesList)) {
            return $this->categoriesList[$id];
        }
        return false;
    }

    // Retrieve all authors
    public function getAuthors() {
        return $this->authorsList;
    }

    // Retrieve one auhtor $id based
    public function getAuthor($id) {
        if (array_key_exists($id, $this->authorsList)) {
            return $this->authorsList[$id];
        }
        return false;
    }
}