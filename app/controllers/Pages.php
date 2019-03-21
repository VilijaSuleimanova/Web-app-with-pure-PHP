<?php

 class Pages extends Controller {


  public function __construct(){

    $this->pageModel = $this->model('Page');

     
  }

  public function index(){

    var_dump($_SESSION['name']);

    $_SESSION['name'];

    $data = [

      'title' => 'PosTube',

    ];
    
    $this->view('pages/index', $data);

  }
  
  public function about(){

    $_SESSION['name'];

    $data = [

      'title' => 'This is about page' 
  
    ];

    $this->view('pages/about', $data);

 }

  public function contact(){

    $_SESSION['name'];

    $data = [

      'title' => 'This is contact page' 
    ];

    $this->view('pages/contact', $data);

  }

  public function register(){
    
    var_dump($_SESSION['name']);

    var_dump($_POST['name']);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Username Validation
      if(empty($_POST['name'])) {

        $data ['name_err'] = '<small class="alert alert-danger">Username must be provided</small>';

      } elseif(strlen($_POST['name']) < 3){

        $data['name_err'] = '<small class="alert alert-danger">Username is too short</small>';

      } else {

        $userName = [$_POST['name']];

        if($this->pageModel->userNamePresenceCheck($userName)) {

        $data['name_err'] = '<small class="alert alert-danger">Username provided already exists</small>';

        }
      }

      // Email Validation
      if(empty($_POST['email'])) {

        $data['email_err'] = '<small class="alert alert-danger">Email must be provided</small>';

      } else {

        $email = [$_POST['email']];
        // Email presence check
        if($this->pageModel->emailPresenceCheck($email)) {

        $data['email_err'] = '<small class="alert alert-danger">Email provided is already taken</small>';

        }
      }

      // Password Validation
      if(empty($_POST['password'])) {

        $data['password_err'] = '<small class="alert alert-danger">Password must be provided</small>';

      } else {

        if(strlen($_POST['password']) < 7){

        $data['password_err'] = '<small class="alert alert-danger">Password is too short</small>';

        }

      }
      
      // Password Confirm Validation
      if(empty($_POST['confirm_password'])) {

        $data['confirm_password_err'] = '<small class="alert alert-danger">Password confirm must be provided</small>';

      } elseif($_POST['confirm_password'] != $_POST['password']){

        $data['confirm_password_err'] = '<small class="alert alert-danger">Passwords must match</small>';

      }

      
      if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
        
      // Registration
      $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $values = [$_POST['name'], $_POST['email'], $_POST['password']];

      $this->pageModel->register($values);

      $_SESSION['registered'] = true;
      
      redirect('pages/login');

      } 
      
    }

     $this->view('pages/register', $data);

  } 

  

  public function login(){

    $_SESSION['name'];

    $_SESSION['registered'];

    if(isset($_SESSION['registered'])) {

      $data['registered'] = '<p class="alert alert-success">You are now registered and can login!</p>';

    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

     

      if(empty($_POST['loginName'])) {

       $data['login_name_err'] = '<small class="alert alert-danger">Username must be provided</small>';

      } else {

        $userName = [$_POST['loginName']];

        if(!$this->pageModel->userNamePresenceCheck($userName)) {

          $data['login_name_err'] = '<small class="alert alert-danger">No such Username exists</small>';

        } else {

          $loginName = $_POST['loginName']; 
          
          $loginPassword = $_POST['loginPassword'];

          if(!$this->pageModel->passwordMatchCheck($loginName, $loginPassword)){

            $data['login_password_err'] = '<small class="alert alert-danger">Password does not match</small>';

          } else {

            $_SESSION['name'] = $_POST['loginName'];

            if($_SESSION['registered']) {

              unset($_SESSION['registered']);

            }
            
            redirect('admins/index');

          }     

        }

      }

      if(empty($_POST['loginPassword'])) {

        $data['login_password_err'] = '<small class="alert alert-danger">Password must be provided</small>';
      
      } 
      
    }
  
    $this->view('pages/login', $data);

  }


}
