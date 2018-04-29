<?php 
  Class DB {
    private static $servername;
    private static $username;
    private static $password;
    private static $dbname;
    private static $charset;

    private static function connect() {
      self::$servername = "SERVER";
      self::$username = "doctornau";
      self::$password = "PASSWORD";
      self::$dbname = "doctornau";
      self::$charset = "utf8mb4";

      try {
        $dsn = "mysql:host=".self::$servername.";dbname=".self::$dbname.";charset=".self::$charset;
        $pdo = new PDO($dsn, self::$username, self::$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
      } catch (PDOException $e) {
        echo "Connection failed: ".$e->getMessage();
      }
    }

    public static function query($query, $params = array()) {
      $statement = self::connect()->prepare($query);
      $statement->execute($params);

      if (explode(' ', $query)[0] == 'SELECT') {
        $data = $statement->fetchAll();
        return $data;
      }
    }
  }
?>