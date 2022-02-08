<?php
namespace App\Models;

use App\Services\RangeCompactor;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
	protected $table = 'crew';

	public function ship()
	{
		return $this->belongsTo(Ship::class);
	}

	public function compacted()
	{
		$data = [
			$this->s1,
			$this->s2,
			$this->s3,
			$this->s4,
			$this->s5,
			$this->s6,
			$this->s7,
			$this->s8
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
