<?php

use Slim\App;

use app\controllers\HomeController;
use app\controllers\UserController;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/user/create', [UserController::class, 'index']);
    $app->post('/user/store', [UserController::class, 'store']);
};
