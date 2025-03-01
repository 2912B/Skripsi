<?php

use App\Http\Middleware\SecurityHeaders;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Session\Middleware\StartSession;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',

    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->use([
            SecurityHeaders::class,
            // EncryptCookies::class,
            // AddQueuedCookiesToResponse::class,
            // StartSession::class,

            // // Enable rate limiting
            // SubstituteBindings::class,
            // ThrottleRequests::class,
        ]);

        $middleware->alias([
            'admin.guest' => \App\Http\Middleware\AdminRedirect::class,
            'admin.auth' => \App\Http\Middleware\NotAdmin::class
        ]);

        $middleware->redirectTo(
            guests: '/',
            users: '/',
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
