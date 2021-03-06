<?php namespace Keyhunter\Multilingual;

use Illuminate\Events\EventServiceProvider;
use Illuminate\Foundation\Application as Container;
use Illuminate\Log\LogServiceProvider;

class Application extends Container
{
    /**
     * Register all of the base service providers.
     *
     * @return void
     */
    protected function registerBaseServiceProviders()
    {
        $this->register(new EventServiceProvider($this));

        $this->register(new LogServiceProvider($this));

        $this->register(new RoutingServiceProvider($this));
    }
}
