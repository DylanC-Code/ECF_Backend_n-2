<?php

namespace App\Models;

use App\Database\Db;

class StudentModel extends Model
{
  public function __construct()
  {
    $this->db = (new Db('ECF'))->connect();
  }
}
