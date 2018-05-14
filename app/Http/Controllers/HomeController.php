<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Menu;

class HomeController extends Controller
{
	public function index()
    {
			$menus = Menu::where('menu_level', 1)->get();
			$submenus = Menu::where('menu_level', 2)->get();
      return view('Main/home', ['menus' => $menus, 'submenus' => $submenus]);
    }
}
