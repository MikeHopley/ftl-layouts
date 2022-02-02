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
}
