<?php

class Admins extends Controller {

  public function __construct(){

    $this->adminModel = $this->model('Admin');

  }

  public function index() {

    $_SESSION['name'];

    $_SESSION['admin_id']= $this->adminModel->getAdminId($_SESSION['name']);

    if(is_null($_SESSION['name'])) {
      exit;
    }
    
    var_dump($posts = $this->adminModel->loadPosts($_SESSION['admin_id']));

    $data = [

      'posts' => $posts
    ];

    $this->view('admins/index', $data);

  }

  public function logout(){
    
    $_SESSION['name'];

    $_SESSION['admin_id'];

    if(is_null($_SESSION['name'])) {
      
      exit;
    }

    unset($_SESSION['name']);

    unset($_SESSION['admin_id']);


    redirect('pages/index');

  }

  public function create(){
   
    $_SESSION['name'];

    $_SESSION['admin_id'];

    if(is_null($_SESSION['name'])) {
      exit;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

      $this->adminModel->savePost($_SESSION['admin_id'], $_POST['title'], $_POST['content']);
    }

    $this->view('admins/create', $data);

  }
}

