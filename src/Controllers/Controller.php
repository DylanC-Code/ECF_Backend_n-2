<?php

namespace App\Controllers;

class Controller
{
  protected function render(string $file, array $data = [])
  {
    extract($data);

    ob_start();

    require_once ROOT . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . $file . '.php';

    $content = ob_get_clean();

    require_once ROOT . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . 'default.php';
  }
}
