<?php
namespace Database\Seeders;

use App\Models\Crew;
use App\Models\Ship;
use App\Services\LevelCalculator;
use Illuminate\Database\Seeder;

class CrewSeeder extends Seeder
{
	public function run()
	{
		$path = "/seeders/ships_extra.json";
		
		$json = file_get_contents(database_path() . $path);
		$data = json_decode($json);

		foreach ($data as $ship) {
			$this->seedCrew($ship);
		}
	}

	private function seedCrew($data)
	{
		$ship = Ship::whereName($data->name)->first();

		$levels = new LevelCalculator($data->crew_min, $data->crew_max);
		$crew = $levels->crew();

		Crew::create([
			'ship_id' => $ship->id,
			's1' => $crew[0],
			's2' => $crew[1],
			's3' => $crew[2],
			's4' => $crew[3],
			's5' => $crew[4],
			's6' => $crew[5],
			's7' => $crew[6],
			's8' => $crew[7],
		]);
	}
}
