<?php
namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class OverflowSeeder extends Seeder
{
	public function run()
	{
		foreach (Room::all() as $room) {
			$this->seedOverflow($room);
		}
	}

	private function seedOverflow(Room $room)
	{
		if (is_null($room->overflow_room)) {
			return;
		}

		$overflow = Room::where('ship_id', $room->ship_id)
			->where('number', $room->overflow_room)
			->first();

		$room->update([
			'overflow_x' => $overflow->origin_x,
			'overflow_y' => $overflow->origin_y,
		]);
	}
}
