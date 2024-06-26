<?php

use Custom\Tes;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\App;

$user = new Tes();

return function (App $app) use ($user) {
    $app->get('/', function (Request $request, Response $response, $args) use ($user) {
        $response->getBody()->write($user->getUser());
        return $response;
    });


    $app->get('/api/users', function (Request $request, Response $response, $args) {
        $data = ['John Doe', 'Jane Doe'];

        $response->getBody()->write(json_encode($data));
        return $response->withHeader('Content-Type', 'application/json');
    });
};
