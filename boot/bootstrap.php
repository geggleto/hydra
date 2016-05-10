<?php

//Define Global Services, these services will be available to all sub-applications
$global = [
    
];

$container = new \Hydra\ContainerProxy(new Slim\Container($global));

