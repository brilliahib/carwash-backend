<?php

use App\Http\Resources\ResponseResource;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (ValidationException $e, $request) {
            return new ResponseResource(
                $e->errors(),
                'Validation failed',
                422
            );
        });

        $exceptions->render(function (Throwable $e, $request) {
            return new ResponseResource(
                null,
                $e->getMessage(),
                $e->getCode() > 0 ? $e->getCode() : 500
            );
        });
    })->create();
