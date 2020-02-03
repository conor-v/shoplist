<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ListDAO.php';

class ShoplistController extends Controller {

  private $listDAO;

  function __construct() {
    $this->listDAO = new ListDAO();
  }

  public function index() {
    $items = $this->listDAO->selectAll();

    $this->set('items', $items);
    $this->set('title', 'Overview');
  }

  public function details() {
    if (isset($_GET['id'])) {
      $item = $this->listDAO->selectById($_GET['id']);
    }

    if (empty($item)){
      $_SESSION['error'] = 'This item does not exist!';
      header("Location: index.php");
      exit();
    }

    $this->set('item', $item);
    $this->set('title', 'details');
  }



}
