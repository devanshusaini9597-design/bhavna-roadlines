<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Laravel bootstrap
require_once __DIR__.'/../vendor/autoload.php';

// Create the application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
