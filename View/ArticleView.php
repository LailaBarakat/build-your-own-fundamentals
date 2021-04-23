<?php
foreach ($articles as $article) : ?>
    <div>
        <h2><?= $article->getTitle() ?></h2>
        <a href="index.php?page=article-detail&article_slug=<?= $article->getSlug() ?>">Tell me more</a>
    </div>
<?php endforeach; ?>