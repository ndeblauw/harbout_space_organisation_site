<?php

namespace App\Providers;

use App\View\Components\Boolean;
use App\View\Components\Text;
use App\View\Components\Textarea;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Blade::component('form-text', Text::class);
        Blade::component('form-textarea', Textarea::class);
        Blade::component('form-boolean', Boolean::class);
    }
}
