<?php

namespace App\Providers;

use App\Interfaces\SectionRepositoryInterface;
use App\Interfaces\TaskRepositoryInterface;
use App\Repositories\SectionRepository;
use App\Repositories\TaskRepository;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        JsonResource::withoutWrapping();
    }
}
