<?php
namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		Model::unguard();
		DB::beginTransaction();

		$this->call([
			ShipSeeder::class,
			SystemSeeder::class,
			RoomSeeder::class,
			CrewSeeder::class,
			ResourcesSeeder::class,
		]);

		DB::commit();
		Model::reguard();
	}
}
