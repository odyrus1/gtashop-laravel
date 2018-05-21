<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Games;

class ProductController extends Controller
{
	public function index($slug)
    {
      $game = Games::where('slug', $slug)->first();
      return view('Product/index', ['game' => $game]);
    }
}
