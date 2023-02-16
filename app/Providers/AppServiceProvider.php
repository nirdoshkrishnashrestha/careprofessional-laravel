<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

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
    
    $about_menu=DB::table('abouts')->orderby('order')->get();
    view()->share('about_menu', $about_menu); 

    $service_menu=DB::table('services')->orderby('order')->get();
    view()->share('service_menu', $service_menu);

    $procedure_menu=DB::table('procedures')->orderby('order')->get();
    view()->share('procedure_menu', $procedure_menu);

    $group_menu=DB::table('groups')->orderby('order')->get();
    view()->share('group_menu', $group_menu);

    $contact=DB::table('details')->get();
    view()->share('contact', $contact); 

    $socials=DB::table('socials')->get();
    view()->share('socials', $socials); 

    
    Paginator::useBootstrap();
    }
}
