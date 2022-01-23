<?php
namespace Database\Seeders;

use App\Models\Ship;
use App\Models\System;
use App\Services\LevelCalculator;
use Illuminate\Database\Seeder;

class SystemSeeder extends Seeder
{
	public function run()
	{
		foreach (Ship::all() as $ship) {
			$this->seedSystems($ship);
		}
	}

	private function seedSystems(Ship $ship)
	{
		$path = "/seeders/systems/{$ship->type}/{$ship->class}.json";

		if (!file_exists(database_path() . $path)) {
			return;
		}
		
		$json = file_get_contents(database_path() . $path);
		$systems = json_decode($json);

		foreach ($systems as $system) {
			$levels = new LevelCalculator($system->min, $system->max);
			$systems = $levels->systems();
			
			System::create([
				'ship_id' => $ship->id,
				'name' => $system->name,
				'short_name' => $this->getShortName($system->name),
				'optional' => $system->optional ?? false,
				
				's1_min' => $systems[0][0],
				's1_max' => $systems[0][1],
				's2_min' => $systems[1][0],
				's2_max' => $systems[1][1],
				's3_min' => $systems[2][0],
				's3_max' => $systems[2][1],
				's4_min' => $systems[3][0],
				's4_max' => $systems[3][1],
				's5_min' => $systems[4][0],
				's5_max' => $systems[4][1],
				's6_min' => $systems[5][0],
				's6_max' => $systems[5][1],
				's7_min' => $systems[6][0],
				's7_max' => $systems[6][1],
				's8_min' => $systems[7][0],
				's8_max' => $systems[7][1],
			]);
		}
	}

	private function getShortName($name)
	{
		if ($name == 'mind control') {
			return 'mind';
		}
		if ($name == 'clone bay') {
			return 'clonebay';
		}
		return $name;
	}
}
