<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
	public function up()
	{
		Schema::create('rooms', function (Blueprint $table) {
			$table->id();

			$table->foreignId('ship_id')->constrained();
			$table->foreignId('system_id')->nullable()->default(null)->constrained();

			$table->string('type')->default('empty');
			$table->string('name')->nullable()->default(null);
			$table->smallInteger('origin_x')->default(0);
			$table->smallInteger('origin_y')->default(0);
			$table->string('shape')->default('square');

			$table->timestamps();
		});
	}
}
