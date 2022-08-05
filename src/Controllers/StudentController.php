<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends Controller
{
  function __construct()
  {
    $this->page = isset($_GET['page']) ? $_GET['page'] : 1;
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

  public function search($name = null)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $name = $_POST['name'];
      header("Location:/students/search/$name/page/1");
    } elseif (isset($_GET['page'])) {
      $page = $_GET['page'];
      header("Location:/students/search/$name/page/$page");
    }
    $students = (new StudentModel())->getByName($name);

    $page = explode('/', $_SERVER['REDIRECT_URL']);

    $result = $this->pagination($students, intval(end($page)));
    $this->render('/Student/index', $result);
  }
}
