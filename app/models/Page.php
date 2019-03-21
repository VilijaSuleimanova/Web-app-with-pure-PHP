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

  public function passwordMatchCheck($values) {

    $this->db->queryPositional("SELECT * FROM `Admin` WHERE `Username` = ? AND `Password` = ?", $values);

    if($this->db->rowCount()){
 
      return true;
      
    } else {
 
      return false;
    }

  }


}