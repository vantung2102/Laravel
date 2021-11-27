<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     * Đường dẫn đến tuyến đường "nhà" cho ứng dụng của bạn.
     * This is used by Laravel authentication to redirect users after login.
     * Điều này được sử dụng bởi xác thực Laravel để chuyển hướng người dùng sau khi đăng nhập.
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     * Không gian tên bộ điều khiển cho ứng dụng.
     * When present, controller route declarations will automatically be prefixed with this namespace.
     * Khi xuất hiện, các khai báo tuyến của bộ điều khiển sẽ tự động được đặt trước với không gian tên này.
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     * Xác định ràng buộc mô hình tuyến đường của bạn, bộ lọc mẫu, v.v.
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     * Định cấu hình giới hạn tốc độ cho ứng dụng.
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
