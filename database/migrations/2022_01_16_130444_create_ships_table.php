<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ships', function (Blueprint $table) {
			$table->id();

			$table->string('name');
			$table->string('type');
			$table->string('class');
			$table->boolean('pirated')->default(true);
			$table->boolean('is_pirate')->default(false);

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ships');
	}
}
