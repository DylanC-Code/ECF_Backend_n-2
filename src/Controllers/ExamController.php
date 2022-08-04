<?php

namespace App\Controllers;

use App\Models\ExamModel;

class ExamController extends Controller
{
  public function form($id)
  {
    $exam = (new ExamModel())->getOne($id);

    $this->render('Exam/edit', $exam);
  }

  public function edit($id)
  {
    $error = null;
    $data = $_POST;
    $data['id'] = $id;

    if ($data['matiere'] != 1 || $data['matiere'] != 2) {
      $error = 'La matiere n\'est pas valide';
      $data['error'] = $error;

      return $this->render('Exam/edit', $data);
    } elseif ($data['note'] > 20 || $data['note'] < 0) {
      $error = 'La note n\'est pas valide';
      $data['error'] = $error;

      return $this->render('Exam/edit', $data);
    };
  }
}
