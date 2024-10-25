<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Global middleware...
    ];

    protected $middlewareGroups = [
        // Middleware groups...
    ];

    protected $routeMiddleware = [
        // Other middlewares...
        'checkUserType' => \App\Http\Middleware\CheckUserType::class,
    ];
}
