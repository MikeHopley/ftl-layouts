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
				'slug' => $this->slug($ship->name),
				'type' => $ship->type,
				'class' => $ship->class,
				'pirated' => $ship->pirated ?? true,
			]);

			if (!isset($ship->pirated)) {
				$name = 'Pirate ' . $ship->name;
				Ship::create([
					'name' => $name,
					'slug' => $this->slug($name),
					'type' => $ship->type,
					'class' => $ship->class,
					'pirated' => false,
					'is_pirate' => true,
				]);
			}
		}
	}

	private function slug($name)
	{
		$name = strtolower($name);
		return str_replace(' ', '-', $name);
	}

	private function getData()
	{
		$json = file_get_contents(database_path()."/seeders/ships.json");
		return json_decode($json);
	}
}
