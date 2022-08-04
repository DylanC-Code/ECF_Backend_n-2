<?php

namespace App\Controllers;

use App\Models\ExamModel;

class ExamController extends Controller
{
  public function edit($id)
  {
    $exam = (new ExamModel())->getOne($id);

    $this->render('Exam/edit', $exam);
  }
}
