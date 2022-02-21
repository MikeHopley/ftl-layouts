<?php
namespace App\View\Components;

use Illuminate\View\Component;

class ShipGroupLayout extends Component
{
	public function __construct(
		public $title,
		public $pirated,
		public $ships,
		public $groupLayout,
		public $hasDrones = false
	) {
	}

	public function render()
	{
		return view('components.ship-group-layout');
	}
}
