<?php

/** @var \Phalcon\Mvc\Router $router */

$router->addGet('/', 'Packages::index')->setName('homepage');
$router->addGet('/join', 'Auth::join')->setName('join');
$router->addGet('/join/{provider}', 'Auth::socialJoin')->setName('social-join');
$router->addGet('/login', 'Auth::login')->setName('login');
$router->addGet('/logout', 'Auth::logout')->setName('logout');
$router->addGet('/oauth2/{provider}', 'Auth::obtainAccessToken')->setName('oauth2');

$router->notFound('Errors::code404');
