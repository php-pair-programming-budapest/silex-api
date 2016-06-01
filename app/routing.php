<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.01.
 */

$app->get('/', function() {
    return 'home';
});

$app->get('/users', 'Controller\UserController::getAll');
$app->get('/users/{id}', 'Controller\UserController::get');
$app->post('/users', 'Controller\UserController::create');
$app->put('/users/{id}', 'Controller\UserController::update');
$app->delete('/users/{id}', 'Controller\UserController::delete');