<?php
namespace App\View\Components;

use Illuminate\View\Component;

class ShipLayout extends Component
{
	public function __construct(
		public $title,
		public $ship,
		public $groupLayout
	) {
	}

	public function render()
	{
		return view('components.ship-layout');
	}
}
