<!--This file will help easily load models and views from other controllers. 
Every controller created will extend this class   -->
<!-- This is base controller that will load models and views -->

<?php

class Controller {

  // Load model
  public function model($model) {
    // Require model file
    require_once DIR.'/app/models/'.$model.'.php';
    // Instantial model
    return new $model();
  }

  // Load view
  public function view($view, $data =[]) {
  // Require view file
  require_once DIR.'/app/views/'.$view.'.php';
  }
  
}
