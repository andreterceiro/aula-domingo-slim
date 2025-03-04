<?php
namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

session_start();

class UserController
{
    public function index(Request $request, Response $response)
    {
        view('user_create', ['title' => 'Create User']);

        return $response;
    }

    public function store()
    {
        if (!$_SESSION['users']) {
            $_SESSION['users'] = [];
        }
        array_push($_SESSION['users'], $_POST);
        header('location: /user/view');
        die();
    }

    public function view()
    {
        $users = json_encode($_SESSION['users']);
        header('Content-Type: application/json; charset=utf-8');
        echo $users;
        die();
    }
}
