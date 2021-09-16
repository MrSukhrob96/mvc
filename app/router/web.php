<?php
namespace App\router;

use App\_Framework\Http\Controllers\HomeController;

$router->get("/", [HomeController::class, 'index']);