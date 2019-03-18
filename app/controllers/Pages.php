<?php

 class Pages extends Controller {
   
  private $db;

  public function __construct(){
    $this->db = new Database;

     
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
    


    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_pssword_err' => '',
        'login_name_err' => '',
        'login_password_err' => ''
      ];
      // Username Validation
      if(empty($_POST['name'])) {
        $data ['name_err'] = '<small class="alert alert-danger">Username must be provided</small>';
      } elseif(strlen($_POST['name']) < 3){
        $data['name_err'] = '<small class="alert alert-danger">Username is too short</small>';
      }
      // Email Validation
      if(empty($_POST['email'])) {
        $data['email_err'] = '<small class="alert alert-danger">Email must be provided</small>';
      } 
      // Password Validation
      if(empty($_POST['password'])) {
        $data ['password_err'] = '<small class="alert alert-danger">Password must be provided</small>';
      } elseif(strlen($_POST['password']) < 7){
        $data['password_err'] = '<small class="alert alert-danger">Password is too short</small>';
      }
      // Password Confirm Validation
      if(empty($_POST['confirm_password'])) {
        $data ['confirm_password_err'] = '<small class="alert alert-danger">Password confirm must be provided</small>';
      } elseif($_POST['confirm_password'] != $_POST['password']){
        $data['confirm_password_err'] = '<small class="alert alert-danger">Passwords must match</small>';
      }

      if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
      $sql = "SELECT * FROM Admin WHERE Email = ? ";
      $params = 'john@john.com';

      print_r($this->db->queryPositional($sql, $params));
      var_dump($this->db->rowCount());

      }
    }

     $this->view('register', $data);
  } 
  

  public function login(){


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
      $data = [
      'login_name_err' => '',
      'login_password_err' => '',
      ];

      if(empty($_POST['login_name'])) {
        $data ['login_name_err'] = '<small class="alert alert-danger">Username must be provided</small>';
      }

      if(empty($_POST['login_password'])) {
        $data ['login_password_err'] = '<small class="alert alert-danger">Password must be provided</small>';
      }

    };

  
    $this->view('login', $data);


  }




}
