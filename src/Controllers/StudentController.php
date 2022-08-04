<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends Controller
{
  function __construct()
  {
  }

  public function one($id)
  {
    $student = (new StudentModel())->getOne($id);

    $this->render('/Student/show', $student);
  }

  public function all()
  {
    $students = (new StudentModel())->getAll('etudiants');

    $this->render('/Student/index', $students);
  }
}
