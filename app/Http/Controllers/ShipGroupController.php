<?php
namespace App\Http\Controllers;

use App\Models\Ship;

class ShipGroupController extends Controller
{
	public function auto()
	{
		return view('auto.index', [
			'title' => 'Automated',
			'ships' => Ship::whereType('auto')->get(),
			'pirated' => false,
		]);
	}

	public function crystal()
	{
		return view('crystal.index', [
			'title' => 'Crystal',
			'ships' => Ship::whereType('crystal')->get(),
			'pirated' => false,
		]);
	}

	public function engi()
	{
		return view('engi.index', [
			'title' => 'Engi',
			'ships' => Ship::whereType('engi')->get(),
			'pirated' => false,
		]);
	}

	public function federation()
	{
		return view('federation.index', [
			'title' => 'Federation',
			'ships' => Ship::whereType('federation')->get(),
		]);
	}

	public function lanius()
	{
		return view('lanius.index', [
			'title' => 'Lanius',
			'ships' => Ship::whereType('lanius')->get(),
			'pirated' => false,
		]);
	}

	public function mantis()
	{
		return view('mantis.index', [
			'title' => 'Mantis',
			'ships' => Ship::whereType('mantis')->get(),
		]);
	}

	public function rebel()
	{
		return view('rebel.index', [
			'title' => 'Rebel',
			'ships' => Ship::whereType('rebel')->get(),
		]);
	}

	public function rock()
	{
		return view('rock.index', [
			'title' => 'Rock',
			'ships' => Ship::whereType('rock')->get(),
		]);
	}

	public function slug()
	{
		return view('slug.index', [
			'title' => 'Slug',
			'ships' => Ship::whereType('slug')->get(),
		]);
	}

	public function zoltan()
	{
		return view('zoltan.index', [
			'title' => 'Zoltan',
			'ships' => Ship::whereType('zoltan')->get(),
		]);
	}
}
