<?php

namespace App\Controllers;

use App\Database\Db;
use App\Models\StudentModel;

class StudentController
{
  function __construct()
  {
  }

  public function getOne($id)
  {
  }

  public function all()
  {
    $students = (new StudentModel())->getAll('etudiants');
    var_dump($students);
  }
}
