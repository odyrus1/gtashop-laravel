<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Games;

class StoreController extends Controller
{
	public function index($slug)
    {
			$games = Games::where($slug, 1)->orderBy('sales', 'desc')->get();
      return view('Store/index', ['games' => $games]);
    }
}
