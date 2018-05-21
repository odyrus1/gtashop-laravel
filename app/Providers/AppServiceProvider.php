<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      View::composer('Templates/template', function ($view) {
          $menus = Menu::where('menu_level', 1)->get();
  			  $submenus = Menu::where('menu_level', 2)->get();
          $view->with('menus', $menus);
          $view->with('submenus', $submenus);
      });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
