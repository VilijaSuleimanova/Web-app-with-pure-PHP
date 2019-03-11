<?php


 class Pages extends Controller {

  public function __construct(){

    $this->postModel = $this->model('Post');   

     
  }

  public function index(){
    
    $posts = $this->postModel->getPosts();


    $data = [
      'title' => 'This is index page',
      'posts' => $posts
    ];
    
    $this->view('index', $data);
  }
  
  public function about(){

    $data = [
      'title' => 'This is about page' 
    ];
    $this->view('about', $data);
 }



 }