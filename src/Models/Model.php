<?php

namespace App\Models;

use App\Database\Db;
use Exception;

class Model
{
  protected $db;

  public function getAll($table)
  {
    $req = $this->db->query("SELECT * FROM $table", \PDO::FETCH_ASSOC)->fetchAll();
    if (!empty($req)) return $req;

    throw new Exception("$table is empty");
  }
}
