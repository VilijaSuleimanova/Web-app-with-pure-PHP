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


  public function register($values){
    return $this->db->queryPositional("INSERT INTO `Admin` (`Username`, `Email`, `Password`) VALUES (?,?,?)", $values);

  }
}