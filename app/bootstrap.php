<?php

namespace App;

require_once __DIR__ . "/../vendor/autoload.php";

use App\_Framework\Core\Router;
$router = new Router();

require_once __DIR__ . "/router/api.php";
require_once __DIR__ . "/router/web.php";
