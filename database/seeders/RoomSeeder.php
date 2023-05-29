<?php
namespace Database\Seeders;

use App\Models\Room;
use App\Models\Ship;
use Exception;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
	public function run()
	{
		foreach (Ship::all() as $ship) {
			$this->seedRooms($ship);
		}
	}

	private function seedRooms(Ship $ship)
	{
		$path = match ($ship->is_pirate) {
			true => "/seeders/rooms/{$ship->baseType}/pirate/{$ship->class}.json",
			false => "/seeders/rooms/{$ship->type}/{$ship->class}.json",
		};

		if (!file_exists(database_path() . $path)) {
			return;
		}
		
		$json = file_get_contents(database_path() . $path);
		$rooms = json_decode($json);

		foreach ($rooms->empty as $room) {
			Room::create([
				'ship_id' => $ship->id,
				'origin_x' => $room->x,
				'origin_y' => $room->y,
				'shape' => $room->shape ?? 'square',
				'number' => $room->number ?? 0,
				'overflow_room' => $room->overflow ?? null,
			]);
		}

		foreach ($rooms->system as $room) {
			$system = $ship->systems()->whereName($room->name)->first();

			if (is_null($system)) {
				throw new Exception("Missing system: ".$room->name.
				" on ship ".$ship->name);
			}

			Room::create([
				'ship_id' => $ship->id,
				'origin_x' => $room->x,
				'origin_y' => $room->y,
				'shape' => $room->shape ?? 'square',
				'system_id' => $system->id,
				'type' => 'system',
				'name' => $room->name,
				'number' => $room->number ?? 0,
				'overflow_room' => $room->overflow ?? null,
			]);
		}
	}
}
