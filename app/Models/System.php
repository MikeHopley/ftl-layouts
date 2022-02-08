<?php
namespace App\Models;

use App\Services\RangeCompactor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
	use HasFactory;

	public function ship()
	{
		return $this->belongsTo(Ship::class);
	}

	public function room()
	{
		return $this->hasOne(Room::class);
	}

	public function range($sector)
	{
		if ($this->{'s'.$sector.'_min'} == $this->{'s'.$sector.'_max'}) {
			return $this->{'s'.$sector.'_min'};
		}
		return $this->{'s'.$sector.'_min'}
			.' &mdash; '.$this->{'s'.$sector.'_max'};
	}

	public function min()
	{
		return $this->{'s'.$this->ship->sector_min_special.'_min'};
	}

	public function max()
	{
		return $this->{'s'.$this->ship->sector_max_special.'_max'};
	}

	public function minSectorMax()
	{
		return $this->{'s'.$this->ship->sector_min_special.'_max'};
	}

	public function maxSectorMin()
	{
		return $this->{'s'.$this->ship->sector_max_special.'_min'};
	}

	public function isFixed()
	{
		return $this->min() == $this->max();
	}

	public function isFixedRange()
	{
		return $this->min() == $this->maxSectorMin()
			&& $this->max() == $this->minSectorMax();
	}

	public function compacted()
	{
		$data = [
			$this->range(1),
			$this->range(2),
			$this->range(3),
			$this->range(4),
			$this->range(5),
			$this->range(6),
			$this->range(7),
			$this->range(8),
		];

		$compactor = new RangeCompactor(
			$data,
			$this->ship->sector_min_special,
			$this->ship->sector_max_special
		);
		$compactor->trim();
		$compactor->compact();

		return $compactor->compacted;
	}
}
