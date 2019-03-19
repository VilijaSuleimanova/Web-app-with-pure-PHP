<!-- This is where pdo class is going to be with methods as select, insert, 
update, count and delete from database. The model(that interacts with database) 
will use this file-->

<?php

class Database {

  public function __construct(){

        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.CHARSET;
        
        $options = [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_PERSISTENT         => true,
          PDO::ATTR_EMULATE_PREPARES   => false,
          PDO::MYSQL_ATTR_FOUND_ROWS   => true
      ];

      try {

        $this->pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $options);

      } catch (PDOException $e) {

        throw new PDOException($e->getMessage(), (int)$e->getCode());
      }
  }

   // Simple query
   public function query($sql) {

    return $this->stmt = $this->pdo->query($sql);

    }
    // Positional query


    public function queryPositional($sql, $params) {

      $this->stmt = $this->pdo->prepare($sql);
      return $this->stmt->execute($params);
    }

    public function rowCount(){
      
      return $this->stmt->rowCount();
    }

}
