<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function render($request, Throwable $exception)
    {
        if ($request->is('api/*')) {
            $errors = [$exception->getMessage()];
            $code   = 400;

            if ($exception instanceof AuthenticationException) {
                $code = 401;
            }

            if ($exception instanceof AuthorizationException) {
                $code = 403;
            }

            if ($exception instanceof ModelNotFoundException) {
                $errors = ['Resource Not Found'];
                $code   = 404;
            }

            if ($exception instanceof ValidationException) {
                $errors = $exception->errors();
                $code   = $exception->status;
            }

            return response()->json(['errors' => $errors], $code);
        }

        return parent::render($request, $exception);
    }
}
