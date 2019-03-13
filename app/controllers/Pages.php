<?php

 class Pages extends Controller {

  public function __construct(){


     
  }

  public function index(){

    $data = [
      'title' => 'PosTube',
    ];
    
    $this->view('index', $data);
  }
  
  public function about(){

    $data = [
      'title' => 'This is about page' 
    ];
    $this->view('about', $data);
 }

  public function contact(){
    $data = [
      'title' => 'This is contact page' 
    ];
    $this->view('contact', $data);
  }

  public function register(){

    if(!empty($_POST)) {
      $data['title'] = 'Yes!';
    } else {
      $data['title'] = 'gogog';
    }

    // $data = [
    //   'title' => 'QQ' 
    // ];

    $this->view('register', $data);

    
    
  }

  public function login(){
    $this->view('login', $data);
  }

 }