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
    $student = (new StudentModel())->getOneWithNote($id);

    $this->render('/Student/show', $student);
  }

  public function all()
  {
    $students = (new StudentModel())->getAll('etudiants');

    $this->render('/Student/index', $students);
  }

  public function form($id)
  {
    $student = (new StudentModel())->getOne($id);

    $this->render('/Student/edit', $student);
  }

  public function delete($id)
  {
    (new StudentModel())->deleteOne($id);

    header('Location:/students');
  }

  public function edit($id)
  {
    $data = $_POST;
    $data['id'] = $id;

    (new StudentModel())->editOne($data);
    header("Location:/students/edit/$id");
  }
}
