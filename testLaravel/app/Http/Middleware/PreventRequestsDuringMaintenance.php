<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;
//Ngăn chặn các yêu cầu trong quá trình bảo trì
class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     * Các URI có thể truy cập được trong khi bật chế độ bảo trì.
     * @var array
     */
    protected $except = [
        //
    ];
}
