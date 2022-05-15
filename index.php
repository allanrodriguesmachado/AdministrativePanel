<?php

require __DIR__ . '/vendor/autoload.php';


use App\Http\Router;
use WilliamCosta\DotEnv\Environment;

Environment::load(__DIR__);
define('URL', getenv('URL'));



$obRouter = new Router(URL);

include __DIR__ . '/routes/pages.php';

$obRouter->run()->sendResponse();