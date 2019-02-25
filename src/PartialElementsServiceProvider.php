<?php
namespace OmnesGroup\PartialElements;

use Illuminate\Support\ServiceProvider;

class PartialElementsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/partial-elements'),
        ], 'views');

        $this->loadViewsFrom(__DIR__.'/views', 'partial-elements');
    }
}
