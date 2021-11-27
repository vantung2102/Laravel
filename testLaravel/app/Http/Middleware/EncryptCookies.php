<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware // Mã hóa cookie
{
    /**
     * The names of the cookies that should not be encrypted.
     * Tên của các cookie không được mã hóa
     * @var array
     */
    protected $except = [
        //
    ];
}
