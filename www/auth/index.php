<?php

include "../../vendor/autoload.php";

//Step 1: Include the Global Bootstrap
require '../../boot/bootstrap.php';

//Step 2: Define Local Services via $container global


//Step 3: Construct App
$app = new Slim\App($container);

//Step 4: Assign Routes

//We are in auth... so this route is /auth/hi
$app->get('/hi', function ($req, $res, $args) {
    return $res->write("Hi!");
});

//Step 5: Execute App
$app->run();


