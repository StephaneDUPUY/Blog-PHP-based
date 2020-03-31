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
}