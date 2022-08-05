<?php

namespace App\Controllers;

class Controller
{
  protected $page;
  protected function render(string $file, array $data = [])
  {
    extract($data);

    ob_start();

    require_once ROOT . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . $file . '.php';

    $content = ob_get_clean();

    require_once ROOT . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . 'default.php';
  }

  protected function pagination(array $result, int $index = 0)
  {

    $page = ['l' => false, 'r' => false, 'index' => $index];
    if ($index * 6 < count($result)) $page['r'] = true;
    if ($index !== 0) $page['l'] = true;

    $result = array_splice($result, $index, 6);

    return ['result' => $result, 'page' => $page];
  }
}
