<?php

require_once( __DIR__ . '/DAO.php');

class IndexDAO extends DAO {

  public function selectAll(){
    $sql = "SELECT * FROM `products`";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insertNewsletter($data){
    $sql = "INSERT INTO `newsletter`(`email`) VALUES (:email)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':email', $data['email']);
    $stmt->execute();
  }

}
