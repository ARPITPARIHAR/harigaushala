<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OtpServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('otp', function () {
            return new \App\Services\OtpService();
        });
    }
}