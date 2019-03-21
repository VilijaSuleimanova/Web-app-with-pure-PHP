<?php

class Admins extends Controller {

  public function __construct(){

    $this->pageModel = $this->model('Admin');

  }

  public function index() {

    $_SESSION['name'];

    if(is_null($_SESSION['name'])) {
      exit;
    }
    
    $data = [
      'user' => $_SESSION['name']
    ];

      $this->view('admins/index', $data);

  }

  public function logout(){
    
    $_SESSION['name'];

    redirect('pages/index');
    unset($_SESSION['name']);

  }

  
}

