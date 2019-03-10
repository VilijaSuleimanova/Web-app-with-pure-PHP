<!-- This file will look into the url and will pull out what will need to be 
pulled out and will create an array and will decide what to load as a controller, 
as a method, as a parameter -->
<?php
// Creates URL & loads core controller
// URL Format: /controller/method/params

class Core {
  protected $controller;
  protected $method;
  protected $params = [];

  public function __construct(){

    $url = $this->getProperties();
    
    // Step 2. Assign new value to the property above
    if(file_exists(DIR.'/app/controllers/'.ucwords($url[0]).'.php')) {
      $this->controller = ucwords($url[0]);
      unset($url[0]);
    } else {
      die();
    }

    // Step 3. Require the controller
    require_once DIR.'/app/controllers/'.$this->controller.'.php';

    //Step 4. Instantiate controller class

    $this->controller = new $this->controller;

    // Step 5. Check for second part of url
    if($url[1]) {
      $this->method = $url[1];
      uset($url[1]);
    }  else {
      die('Error: No such page exists');
    }
    
    // Step6. Check for third part of url
    if($url[2]) {
    $this->params = $url[2];
  } 

  call_user_func_array([$this->controller, $this->method], $this->params);
  }

 


  // Step 1. Get url values and turn them into array
  public function getProperties(){
    if(isset($_GET['url'])) {
       $url = explode('/', $_GET['url']);
       return $url;
    } else {
      require_once DIR.'/front/views/inc/index.php';
    }
    
  }
}
 