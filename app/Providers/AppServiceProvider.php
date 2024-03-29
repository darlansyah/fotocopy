<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      // waktu jakarta
      config(['app.locale' => 'id']);
      \Carbon\Carbon::setLocale('id');
      date_default_timezone_set('Asia/Jakarta');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
