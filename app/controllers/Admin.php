<?php

class Admin extends Controller {

  public function index() {

    var_dump($_SESSION['name']);
    
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

