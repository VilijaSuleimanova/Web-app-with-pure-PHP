<?php

class Page {

  public function __construct(){

    $this->db = new Database();

  }

  public function emailPresenceCheck($email) {

   $this->db->queryPositional("SELECT * FROM `Admin` WHERE Email = ?", $email);

   if($this->db->rowCount()){

     return true;

   } else {

     return false;
   }

  }

  public function userNamePresenceCheck($userName) {

    $this->db->queryPositional("SELECT * FROM `Admin` WHERE Username = ?", $userName);
 
    if($this->db->rowCount()){
 
      return true;
      
    } else {
 
      return false;
    }
 
   }

  public function register($values){

    return $this->db->queryPositional("INSERT INTO `Admin` (`Username`, `Email`, `Password`) VALUES (?,?,?)", $values);

  }

  public function passwordMatchCheck($loginName, $loginPassword) {

    $loginName = [$loginName];

    $this->db->queryPositional("SELECT `Password` FROM `Admin` WHERE `Username` = ?", $loginName);

    while($passValue = $this->db->fetch()){

      var_dump($jist = $passValue['Password']); 
    };


    

    if(password_verify($loginPassword, $jist)){

      return true;

    }  else {

      return false;

    }

    // $values = [$loginName, $loginPassword];

    // $this->db->queryPositional("SELECT * FROM `Admin` WHERE `Username` = ? AND `Password` = ?", $values);

    // if($this->db->rowCount()){
 
    //   return true;
      
    // } else {
 
    //   return false;
    // }

  }


}