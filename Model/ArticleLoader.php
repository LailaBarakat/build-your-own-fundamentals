<?php
require_once 'config.php';
require_once 'Model/Article.php';

class ArticleLoader
{

    public function getAllArticles () : array {

        $articlesArray = [];

        $connection = connect();
        $stm = $connection->query("SELECT * FROM Articles");
        $stm->execute();

        $result = $stm->fetchAll();

        /*$article = new Article(
                    intval($row['id']),
                    $row['title'],
                    $row['slug'],
                    $row['content']);*/

        foreach($result AS ['id' => $id, 'title' => $title, 'slug' => $slug, 'content' => $content]) {
            $articlesArray[] = new Article($id,$title,$slug,$content);
        }
        return $articlesArray;

    }

    public function getArticle (int $id) : Article {

        $connection = connect();
        $stm = $connection->prepare("SELECT * FROM Articles WHERE id = :id");
        $stm-> bindValue('id',$id);
        $stm->execute();

        $result = $stm->fetch();

        return new Article($id,$result['title'],$result['slug'],$result['content']);

    }

    public function getArticleBySlug (string $slug){
        $connection = connect();
        $stm = $connection->prepare("SELECT * FROM Articles WHERE slug = :slug");
        $stm-> bindValue('slug',$slug);
        $stm->execute();

        $result = $stm->fetch();

        return new Article(intval($result['id']),$result['title'],$slug,$result['content']);
    }

}