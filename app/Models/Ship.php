<?php
namespace App\Models;

use Str;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
	protected $casts = [
		'pirated' => 'boolean',
		'is_pirate' => 'boolean',
	];

	public function systems()
	{
		return $this->hasMany(System::class);
	}

	public function rooms()
	{
		return $this->hasMany(Room::class);
	}

	public function crew()
	{
		return $this->hasOne(Crew::class);
	}

	public function resources()
	{
		return $this->hasOne(Resources::class);
	}

	public function hasRooms()
	{
		return $this->rooms->count() > 0;
	}

	public function getBaseTypeAttribute()
	{
		if (Str::endsWith($this->type, '_pirate')) {
			return Str::remove('_pirate', $this->type);
		}
		return $this->type;
	}

	public function hasCrew()
	{
		return $this->crewMin() > 0;
	}

	public function fixedCrew()
	{
		return $this->crewMin() == $this->crewMax();
	}

	public function crewMin()
	{
		return $this->crew->{'s'.$this->sector_min_special};
	}

	public function crewMax()
	{
		return $this->crew->{'s'.$this->sector_max_special};
	}

	public function hullMin()
	{
		return $this->resources->hull + $this->sector_min_special - 1;
	}

	public function hullMax()
	{
		return $this->resources->hull + $this->sector_max_special - 1;
	}
}
