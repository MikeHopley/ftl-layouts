<?php
namespace Database\Seeders;

use App\Models\Resources;
use App\Models\Ship;
use Illuminate\Database\Seeder;

class ResourcesSeeder extends Seeder
{
	public function run()
	{
		$path = "/seeders/ships_extra.json";
		
		$json = file_get_contents(database_path() . $path);
		$data = json_decode($json);

		foreach ($data as $ship) {
			$this->seedResources($ship);
		}
	}

	private function seedResources($data)
	{
		$ship = Ship::whereName($data->name)->first();

		Resources::create([
			'ship_id' => $ship->id,
			'hull' => $data->hull,
			'missiles' => $data->missiles ?? 10,
			'drones' => $data->drones ?? null,
			'max_drones' => $data->max_drones ?? null,
		]);

		$ship->update([
			'sector_min' => $data->sector_min ?? 1,
			'sector_max' => $data->sector_max ?? 8,
			'sector_min_special' => $data->sector_min_special ?? $data->sector_min ?? 1,
			'sector_max_special' => $data->sector_max_special ?? $data->sector_max ?? 8,
		]);
	}
}
