<?php

namespace App\Providers;

use App\Events\ApartmentCreated;
use App\Events\ApartmentDeleted;
use App\Events\ApartmentUpdated;
use App\Events\MortgageProgramCreated;
use App\Events\MortgageProgramDeleted;
use App\Events\MortgageProgramUpdated;
use App\Listeners\ApartmentCacheFlush;
use App\Listeners\MortgageProgramCacheFlush;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ApartmentCreated::class => [
            ApartmentCacheFlush::class,
        ],
        ApartmentUpdated::class => [
            ApartmentCacheFlush::class,
        ],
        ApartmentDeleted::class => [
            ApartmentCacheFlush::class,
        ],
        MortgageProgramCreated::class => [
            MortgageProgramCacheFlush::class,
        ],
        MortgageProgramUpdated::class => [
            MortgageProgramCacheFlush::class,
        ],
        MortgageProgramDeleted::class => [
            MortgageProgramCacheFlush::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
