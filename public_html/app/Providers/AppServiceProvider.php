<?php

namespace App\Providers;

use App\Validator\CustomeValidator;
use Validator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Gallery;
use Illuminate\Support\Facades\View;



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
    public function boot()
{
    View::composer('*', function ($view) {
          $galleries = Gallery::where('status', 1) // Fetch only active galleries
                ->orderBy('name', 'asc') // Order by name in ascending order
                ->get();
        $view->with('galleries', $galleries);
    });
}
}
