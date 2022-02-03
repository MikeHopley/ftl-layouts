<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
	public function up()
	{
		Schema::create('ships', function (Blueprint $table) {
			$table->id();

			$table->string('name');
			$table->string('type');
			$table->string('class');
			$table->boolean('pirated')->default(true);
			$table->boolean('is_pirate')->default(false);
			$table->tinyInteger('sector_min')->default(1);
			$table->tinyInteger('sector_max')->default(8);
			$table->tinyInteger('sector_min_special')->default(1);
			$table->tinyInteger('sector_max_special')->default(8);

			$table->timestamps();
		});
	}
}
