<?php
require_once 'config.php';
require_once 'Model/Product.php';

class ProductLoader
{
    public function getAllProducts() : array {

        $productsArray = [];

        $connection = connect();

        $stm = $connection->query("SELECT * FROM Products");
        $stm->execute();

        $result = $stm->fetchAll();

        foreach($result AS ['id' => $id, 'name' => $name, 'price' => $price, 'tax' => $tax]) {
            $productsArray[] = new Product($id,$name,$price,$tax);
        }
        return $productsArray;

    }

    public function getProduct (int $id) : Product {

        $connection = connect();
        $stm = $connection->prepare("SELECT * FROM Products WHERE id = :id");
        $stm-> bindValue('id',$id);
        $stm->excute();

        $result = $stm->fetch();

        return new Product($id,$result['name'],$result['price'],$result['tax']);

    }
}