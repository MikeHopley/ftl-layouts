<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
	public function up()
	{
		Schema::create('resources', function (Blueprint $table) {
			$table->id();

			$table->foreignId('ship_id');

			$table->tinyInteger('hull');
			$table->tinyInteger('missiles')->default(10);
			$table->tinyInteger('drones')->nullable();
			$table->tinyInteger('max_drones')->nullable();

			$table->timestamps();
		});
	}
}
