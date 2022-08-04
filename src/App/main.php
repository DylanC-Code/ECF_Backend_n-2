<?php

$router = new App\Router\Router($_GET['url']);

$router->get('/students', 'Students~getAll');
$router->get('/students/:id', 'Students~getOne');
$router->post('/students/edit', 'Students~edit');

$router->run();
