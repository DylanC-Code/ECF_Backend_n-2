<?php

$router = new App\Router\Router($_GET['url']);

$router->get('/students', 'Student~all');
$router->get('/students/:id', 'Student~getOne');
$router->post('/students/edit', 'Student~edit');

$router->run();
