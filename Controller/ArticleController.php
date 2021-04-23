<?php
require_once 'Model/ArticleLoader.php';

$articleLoader = new ArticleLoader();
$articles = $articleLoader->getAllArticles();

require_once 'View/ArticleView.php';


