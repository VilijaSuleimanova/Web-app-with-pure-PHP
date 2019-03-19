<?php
defined('DIR') or exit;
// Load Config
require_once DIR.'/app/config/config.php';

// Load helpers
require_once DIR.'/app/helpers/redirect.php';

 // Auto load libraries
 spl_autoload_register(function($className){

  require_once DIR.'/app/libraries/'.$className.'.php';
 }); 