
<?php foreach ($products as $product) : ?>
    <div>
        <h2><?= $product->getName() ?></h2>
        <p>Price (tax included): €<?= round($product->getPrice() * (1 + $product->getTax()), 2) ?></p>
    </div>
<?php endforeach; ?>