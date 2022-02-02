<?php
namespace App\Services;

// https://www.reddit.com/r/ftlgame/comments/qu8kz7/details_on_enemy_ship_generation/

class LevelCalculator
{
	public function __construct(public $min, public $max)
	{
	}

	public function interpolated(int $sector)
	{
		// Linear interpolation between the min and max blueprint values,
		// where sector 1 is min, and sector 9 is max.
		$numerator = ($this->min * (9 - $sector)) + ($this->max * ($sector - 1));
		$interpolated = $numerator / (9 - 1);

		// Round down
		return (int) floor($interpolated);
	}

	public function systemMin(int $sector)
	{
		$min = $this->interpolated($sector);

		// System level must be at least 1 (Auto-assault has min. of 0).
		return $min > 0 ? $min : 1;
	}

	public function systemMax(int $sector)
	{
		// Actual system level is decided by adding a random integer to the min.
		// That number is 0 -- 1 in sectors 1 and 2, and 0 -- 2 afterwards.
		// Therefore adding this number gives us the max. for that sector.
		$bonus = $sector > 2 ? 2 : 1;
		$result = $this->interpolated($sector) + $bonus;

		// Cap it to the blueprint maximum
		$capped = $result > $this->max ? $this->max : $result;

		// Pirate Slug Instigator has blueprint max of 0. Must be at least 1
		return $capped > 0 ? $capped : 1;
	}

	public function systems()
	{
		return [
			[$this->systemMin(1), $this->systemMax(1)],
			[$this->systemMin(2), $this->systemMax(2)],
			[$this->systemMin(3), $this->systemMax(3)],
			[$this->systemMin(4), $this->systemMax(4)],
			[$this->systemMin(5), $this->systemMax(5)],
			[$this->systemMin(6), $this->systemMax(6)],
			[$this->systemMin(7), $this->systemMax(7)],
			[$this->systemMin(8), $this->systemMax(8)],
		];
	}

	public function crew()
	{
		return [
			$this->interpolated(1),
			$this->interpolated(2),
			$this->interpolated(3),
			$this->interpolated(4),
			$this->interpolated(5),
			$this->interpolated(6),
			$this->interpolated(7),
			$this->interpolated(8),
		];
	}
}
