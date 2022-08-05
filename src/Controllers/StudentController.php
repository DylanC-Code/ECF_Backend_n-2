<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends Controller
{
  function __construct()
  {
    $this->page = isset($_GET['page']) ? $_GET['page'] : 0;
  }

  public function one($id)
  {
    $student = (new StudentModel())->getOneWithNote($id);

    $this->render('/Student/show', $student);
  }

  public function all()
  {
    $students = (new StudentModel($this->page))->getAll('etudiants');

    $result = $this->pagination($students, $this->page);
    $this->render('/Student/index', $result);
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

  public function search()
  {
    $name = $_POST['name'];

    $students = (new StudentModel())->getByName($name);

    $this->render('/Student/index', $students);
  }
}
