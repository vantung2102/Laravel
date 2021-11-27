<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;
// Máy chủ đáng tin cậy
class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     * Nhận các mẫu máy chủ đáng tin cậy.
     * @return array
     */
    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
