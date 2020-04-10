<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use Illuminate\Auth\AuthenticationException;
use Auth;

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
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    // public function render($request, Exception $exception)
    // {
    //     return parent::render($request, $exception);
    // }


    public function render($request, Exception $exception)
    {
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {
                return response()->view('errors.' . '404', [], 404);
            }
            if ($exception->getStatusCode() == 403) {
                return response()->view('errors.' . '403', [], 403);
            }

            if ($exception->getStatusCode() == 419) {
                return response()->view('errors.' . '419', [], 419);
            }
        }
     
        return parent::render($request, $exception);
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('player') || $request->is('player/*')) {
            return redirect()->guest('/login/player');
        }
        if ($request->is('coach') || $request->is('coach/*')) {
            return redirect()->guest('/login/coach');
        }
        if ($request->is('club') || $request->is('club/*')) {
            return redirect()->guest('/login/club');
        }
        if ($request->is('agent') || $request->is('agent/*')) {
            return redirect()->guest('/login/agent');
        }

        return redirect()->guest(route('login'));
    }
}
