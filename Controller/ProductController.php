<?php
require_once 'Model/ProductLoader.php';

$productLoader = new ProductLoader();
$products = $productLoader->getAllProducts();

require_once 'View/ProductView.php';