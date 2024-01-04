<?php

namespace Database\PDO;

class Connection
{
  private static $instance;
  private $connection;

  private function __construct()
  {
    $this->makeConnection();
  }

  public static function getInstance()
  {
    if (!self::$instance instanceof self)
      self::$instance = new self();

    return self::$instance;
  }

  public function getDbInstance()
  {
    return $this->connection;
  }

  private function makeConnection()
  {
    $server = "127.0.0.1";
    $database = "personal_finance";
    $username = "root";
    $password = "";
    $port = 3306;

    $connection = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

    $setnames = $connection->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $this->connection = $connection;
  }
}


