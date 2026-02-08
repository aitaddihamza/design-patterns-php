<?php

class Database
{
  private static $instance = null;
  private $connection;

  private function __construct()
  {
    // $this->connection = new PDO("mysql:host=loacalhost");
  }

  public static function getInstance()
  {
    if (self::$instance == null)
      self::$instance = new self();

    return self::$instance;
  }
}


$db1 = Database::getInstance();
$db2 = Database::getInstance();

var_dump($db1 == $db2);
