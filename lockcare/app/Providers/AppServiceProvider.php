<?php

namespace App\Providers;

use App\Brand;
use App\Category;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('front-end.includes.header',function ($view){
            $view->with('categories',Category::where('publication_status',1)->get());
        });
        View::composer('front-end.includes.footer',function ($view){
            $view->with('brands',Brand::where('publication_status',1)
                    ->orderBy('id','DESC')
                    ->take(5)
                    ->get());
        });
    }
}













