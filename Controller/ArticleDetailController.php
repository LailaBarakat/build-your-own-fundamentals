<?php
require_once 'Model/Article.php';
require_once 'Model/ArticleLoader.php';

$articleLoader = new ArticleLoader();

$article = $articleLoader->getArticleBySlug($_GET['article_slug']);

require_once 'View/ArticleDetailView.php';
