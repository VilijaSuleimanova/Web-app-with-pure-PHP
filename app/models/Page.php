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

   $loginNamee = [$loginName];

   $this->db->queryPositional("SELECT `Password` FROM `Admin` WHERE `Username` = ?", $loginNamee);

   $this->result =$this->db->fetch();


    foreach($this->result as $this->res => $this->r) {

      $this->r;
    }

    if(password_verify($loginPassword, $this->r['Password'])){

      return true;

    }  else {

      return false;

    }

  }

  public function showPosts() {

   return  $this->results=$this->db->query("SELECT *
                                            FROM `Posts`
                                            INNER JOIN `Admin`
                                            ON Posts.Admin_Id = Admin.id
                                            ORDER BY Posts.Created_at DESC
                                            ");
  }
     
}