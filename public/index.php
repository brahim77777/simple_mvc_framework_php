<?php

require '../vendor/autoload.php';
//$router = require '../src/Routes/index.php';
//
require '../src/Routes/Router.php';
use App\Router;

echo "e";

$a = new Router();
$a->addRoute("GET", "/public", HomeController::class, "index");
echo "<pre>";
print_r($a->routes);
echo "</pre>";

$a->dispatch();




