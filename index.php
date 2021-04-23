<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'View/header.php';

if ((!empty($_GET['page'])) && ($_GET['page'] == 'articles')) {
    require_once 'Controller/ArticleController.php';
}

if ((!empty($_GET['page'])) && ($_GET['page'] == 'products')){
    require_once 'Controller/ProductController.php';

}

if ((!empty($_GET['page'])) && ($_GET['page'] == 'article-detail') && !empty($_GET['article_slug'])){
    require_once 'Controller/ArticleDetailController.php';
}

require_once 'View/footer.php';