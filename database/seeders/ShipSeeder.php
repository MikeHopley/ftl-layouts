<?php
namespace Database\Seeders;

use App\Models\Ship;
use Illuminate\Database\Seeder;

class ShipSeeder extends Seeder
{
	public function run()
	{
		$ships = $this->getData();

		foreach ($ships as $ship) {
			Ship::create([
				'name' => $ship->name,
				'type' => $ship->type,
				'class' => $ship->class,
				'pirated' => $ship->pirated ?? true,
			]);

			if (!isset($ship->pirated)) {
				Ship::create([
					'name' => 'Pirate ' . $ship->name,
					'type' => $ship->type,
					'class' => $ship->class,
					'pirated' => false,
					'is_pirate' => true,
				]);
			}
		}
	}

	private function getData()
	{
		$json = file_get_contents(database_path()."/seeders/ships.json");
		return json_decode($json);
	}
}
