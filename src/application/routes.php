<?php

$router->get('', 'ControllerMain@index');
$router->post('p', 'ControllerMain@p');
$router->post('test', 'ControllerMain@test');
$router->post('save', 'ControllerMain@save');