<?php
namespace App\Http\Controllers;

use App\Models\Ship;

class ShipController extends Controller
{
	public function show(Ship $ship)
	{
		return view('ship', [
			'title' => $ship->name,
			'ship' => $ship,
		]);
	}
}
