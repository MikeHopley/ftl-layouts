<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
	protected $table = 'resources';

	public function ship()
	{
		return $this->belongsTo(Ship::class);
	}
}
