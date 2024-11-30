<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Spatie\Permission\Middlewares\RoleMiddleware;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
// Other web middleware...
        ],

        'api' => [
// Other API middleware...
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'role' => RoleMiddleware::class,  // Register the role middleware
        'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
// other middleware...
    ];
}
