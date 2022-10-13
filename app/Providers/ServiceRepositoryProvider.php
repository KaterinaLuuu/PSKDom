<?php

namespace App\Providers;

use App\Contracts\ApartmentRepositoryContract;
use App\Contracts\ApartmentServiceContract;
use App\Contracts\MonthlyPaymentServiceContract;
use App\Contracts\MortgageProgramRepositoryContract;
use App\Contracts\MortgageProgramServiceContract;
use App\Contracts\SynchronizerServiceContract;
use App\Repositories\ApartmentRepository;
use App\Repositories\MortgageProgramRepositories;
use App\Services\ApartmentService;
use App\Services\MonthlyPaymentService;
use App\Services\MortgageProgramService;
use App\Services\SynchronizerService;
use Illuminate\Support\ServiceProvider;

class ServiceRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ApartmentRepositoryContract::class, ApartmentRepository::class);
        $this->app->singleton(MortgageProgramRepositoryContract::class, MortgageProgramRepositories::class);
        $this->app->singleton(SynchronizerServiceContract::class, SynchronizerService::class);
        $this->app->singleton(MortgageProgramServiceContract::class, MortgageProgramService::class);
        $this->app->singleton(ApartmentServiceContract::class, ApartmentService::class);
        $this->app->singleton(MonthlyPaymentServiceContract::class, MonthlyPaymentService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
