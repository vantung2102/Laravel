<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
// Xác minh mã thông báo Csrf
class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     * Các URI cần được loại trừ khỏi xác minh CSRF.
     * @var array
     */
    protected $except = [
        //
    ];
}
