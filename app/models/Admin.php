<?php

class Admin {

  public function __construct(){

    $this->db = new Database();

  }


  public function getAdminId($Username){

    $Username = [$Username];

    $this->db->queryPositional("SELECT id FROM Admin WHERE Username = ?", $Username);

    $this->result = $this->db->fetch();

    foreach($this->result as $this->res => $this->r) {

      return $this->r['id'];

    }

  }

  public function loadPosts($id){

    $id = [$id];

   $this->db->queryPositional("SELECT * FROM `Posts` WHERE Admin_Id = ?", $id);

    return $this->result = $this->db->fetch();


  }

  public function savePost($adminId, $postTitle, $postContent) {

    $values = [$adminId, $postTitle, $postContent];

    $this->db->queryPositional("INSERT INTO `Posts`(`Admin_Id`, `Title`, `Text`) VALUES (?,?,?)",  $values);

  }

}

