<?php

namespace Xincap\Wechat;

use Xincap\Wechat\Console\Commands\Wechat;
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Support\ServiceProvider;
use Log;

class AddressServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot() {
        
    }

    public function register() {

        $this->app['command.make.address'] = $this->app->share(function ($app) {
            return new Address();
        });
        $this->commands('command.make.address');
    }

    public function provides() {
        return array('command.make.address');
    }

}
