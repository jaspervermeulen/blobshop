<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/IndexDAO.php';

class PagesController extends Controller {

  function __construct() {
    $this->IndexDAO = new IndexDAO();
  }

  public function index() {

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'joinNewsletter') {
        $this->IndexDAO->insertNewsletter($_POST);
        header("Location: index.php?#newsletter");
      }
    }

    $this->set('page', 'Shop');
    $this->set('products', $this->IndexDAO->selectAll());
  }

}