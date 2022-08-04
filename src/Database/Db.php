<?php

namespace App\Database;

class Db
{
  private $name;
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function connect()
  {
    $dbh = new \PDO("mysql:host=localhost;dbname=$this->name", "root");
    return $dbh;
  }
}
