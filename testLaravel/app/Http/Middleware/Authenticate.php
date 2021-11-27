<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware // Xác thực
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     * Lấy đường dẫn mà người dùng sẽ được chuyển hướng đến khi họ không được xác thực.
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
