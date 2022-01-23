<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
	use HasFactory;

	public function systems()
	{
		return $this->hasMany(System::class);
	}

	public function rooms()
	{
		return $this->hasMany(Room::class);
	}

	public function hasRooms()
	{
		return $this->rooms->count() > 0;
	}
}
