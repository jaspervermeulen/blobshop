<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/IndexDAO.php';
require_once __DIR__ . '/../dao/UserDAO.php';

class PagesController extends Controller {

  function __construct() {
    $this->IndexDAO = new IndexDAO();
    $this->UserDAO = new UserDAO();
  }

  public function index() {

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'joinNewsletter') {
        $this->IndexDAO->insertNewletter($_POST);
        header("Location: index.php?#newsletter");
      }
    }

    $this->set('page', 'Shop');
    $this->set('products', $this->IndexDAO->selectAll());
  }

  public function about() {
    $this->set('page', 'About');
  }

  public function signin() {
    if(!empty($_POST['action'])) {
      if($_POST['action'] == 'signin'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripcslashes($username);
        $password = stripcslashes($password);

        $this->set('currentUser', $this->UserDAO->getCurrentUser($_POST));

        if($password === $this->UserDAO->getCurrentUser($_POST)['password']){
          header("Location: index.php?page=dashboard");
        }else{
          header("Location: index.php?");
        }
      }
    }

    $this->set('page', 'Sign In');
  }

  public function dashboard() {
    $this->set('page', 'Dashboard');
  }
}