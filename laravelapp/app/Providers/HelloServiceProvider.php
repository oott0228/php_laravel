<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        Validator::extend('hello', function($attribute, $value,
        $parameters, $validator) {
        return $value % 2 == 0;
        });
    }
}
