<?php

class Admin extends Controller {

  public function index() {

    $_SESSION['name'];

    if(is_null($_SESSION['name'])) {
      exit;
    }
    
    $data = [
      'user' => $_SESSION['name']
    ];

      $this->view('admin/index', $data);

  }

  public function logout(){
    
    $_SESSION['name'];

    redirect('pages/index');
    unset($_SESSION['name']);

  }

  
}

