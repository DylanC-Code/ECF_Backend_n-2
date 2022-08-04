<?php

$router = new App\Router\Router($_GET['url']);

$router->get('/students', 'Student~all');
$router->get('/students/show/:id', 'Student~one');
$router->get('/exams/edit/:id', 'Exam~edit');

$router->run();
