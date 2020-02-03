<?php

require_once( __DIR__ . '/DAO.php');

class ListDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `shop_items`
    INNER JOIN `shop_categories`
    ON `shop_items`.`cat_id` = `shop_categories`.`category_id`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `shop_items`
    INNER JOIN `shop_categories`
    ON `shop_items`.`cat_id` = `shop_categories`.`category_id`
    WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
