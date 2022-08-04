<?php

namespace App\Controllers;

use App\Models\ExamModel;
use App\Models\StudentModel;

class StudentController extends Controller
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

    $this->render('Students', $students);
  }
}
