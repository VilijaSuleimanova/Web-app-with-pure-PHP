<!-- This is where pdo class is going to be with methods as select, insert, 
update, count and delete from database. The model(that interacts with database) 
will use this file-->

<?php

class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $password = DB_PASSWORD;
  private $dbName = DB_NAME;
  private $charset = CHARSET;

  private $pdo;
  private $stmt;

  public function __construct(){

        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbName.';charset='.$this->charset;
        
        $options = [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_PERSISTENT         => true,
      ];

      try {

        $this->pdo = new PDO($dsn, $this->user, $this->password, $options);

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

       return $this->stmt = $this->pdo->prepare($sql);
       return $this->stmt->excecute($params);
       
      }
}
