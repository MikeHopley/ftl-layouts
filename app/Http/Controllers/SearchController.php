<?php
namespace App\Http\Controllers;

use App\Models\Ship;

class SearchController extends Controller
{
	public function show(Ship $ship)
	{
		return view('search', [

		]);
	}
}
