<?php

require_once( __DIR__ . '/DAO.php');

class UserDAO extends DAO {

  public function getCurrentUser($data){
    $sql = "SELECT `id`, `password` FROM `users` WHERE `username` = :username";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':username', $data['username']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
