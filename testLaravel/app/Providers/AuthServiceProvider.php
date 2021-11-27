<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     * Ánh xạ chính sách cho ứng dụng.
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     * Đăng ký bất kỳ dịch vụ xác thực / ủy quyền nào.
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
