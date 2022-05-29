<?php
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$routes = require '../app/routes/routes.php';

$routes($app);

$app->run();
