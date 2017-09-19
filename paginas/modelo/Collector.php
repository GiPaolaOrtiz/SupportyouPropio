<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-225-192-243.compute-1.amazonaws.com");
define("DB_USER", "kxcvsfjpvyhmyn");
define("DB_PASS", "0f404c465778733d58e0933681c2b950ddbe991a858adf035435f866550bd11f");
define("DB_NAME", "dfc8qvptgcefq2");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
