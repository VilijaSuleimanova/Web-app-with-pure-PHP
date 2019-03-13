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



 }