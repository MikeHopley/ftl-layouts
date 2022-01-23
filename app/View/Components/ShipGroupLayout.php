<?php
namespace App\View\Components;

use Illuminate\View\Component;

class ShipGroupLayout extends Component
{
	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct(public $title, public $pirated, public $ships)
	{
		//
	}

	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\Contracts\View\View|\Closure|string
	 */
	public function render()
	{
		return view('components.ship-group-layout');
	}
}
