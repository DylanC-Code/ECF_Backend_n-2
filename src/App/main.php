<?php

$router = new App\Router\Router($_GET['url']);

$router->get('/students', 'Student~all');
$router->get('/students/show/:id', 'Student~one');
$router->get('/students/edit/:id', 'Student~form');
$router->post('/students/edit/:id', 'Student~edit');
$router->get('/students/delete/:id', 'Student~delete');

$router->get('/exams/edit/:id', 'Exam~form');
$router->post('/exams/edit/:id', 'Exam~edit');
$router->get('/exams/delete/:id', 'Exam~delete');

$router->run();
