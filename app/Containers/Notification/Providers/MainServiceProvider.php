<?php

namespace App\Containers\Notification\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Kavenegar\Laravel\ServiceProvider;
use Kavenegar\Laravel\Facade;


/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
      // InternalServiceProviderExample::class,
      ServiceProvider::class,

    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [
        // 'Foo' => Bar::class,
      'Kavenegar' => Facade::class,
    ];

    /**
     * Register anything in the container.
     */
    public function register()
    {
        parent::register();

        // $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        // ...
    }
}
