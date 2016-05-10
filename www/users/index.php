<?php
include "../../vendor/autoload.php";

//Step 1: Include the Global Bootstrap
require '../../boot/bootstrap.php';

//Step 2: Define Sub-App Services


//Step 3: Construct App
$app = new Slim\App($container);

//Step 4: Assign Routes


//Step 5: Execute App
$app->run();


