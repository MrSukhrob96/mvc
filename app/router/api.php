<?php
namespace App\router;

use App\_Framework\Http\Controllers\ErrorController;
use App\_Framework\Http\Controllers\DatabaseController;
use App\_Framework\Http\Controllers\TableController;

$router->get("api/databases", [DatabaseController::class, 'index']);
$router->get("api/databases/create", [DatabaseController::class, 'create']);
$router->post("api/databases", [DatabaseController::class, 'store']);
$router->get("api/databases/{param}", [DatabaseController::class, 'show']);
$router->get("api/databases/{param}/edit", [DatabaseController::class, 'edit']);
$router->put("api/databases/{param}", [DatabaseController::class, 'update']);
$router->delete("api/databases/{param}", [DatabaseController::class, 'destroy']);

$router->get("api/databases/{param}/tables", [TableController::class, 'index']);
$router->get("api/databases/{param}/tables/create", [TableController::class, 'create']);
$router->post("api/databases/{param}/tables", [TableController::class, 'store']);
$router->get("api/databases/{param}/tables/{param}", [TableController::class, 'show']);
$router->get("api/databases/{param}/tables/{param}/edit", [TableController::class, 'edit']);
$router->put("api/databases/{param}/tables/{param}", [TableController::class, 'update']);
$router->delete("api/databases/{param}/tables/{param}", [TableController::class, 'destroy']);

$router->get("error/{param}", [ErrorController::class, 'aboart']);