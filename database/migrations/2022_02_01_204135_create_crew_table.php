<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrewTable extends Migration
{
	public function up()
	{
		Schema::create('crew', function (Blueprint $table) {
			$table->id();

			$table->foreignId('ship_id');

			$table->tinyInteger('s1');
			$table->tinyInteger('s2');
			$table->tinyInteger('s3');
			$table->tinyInteger('s4');
			$table->tinyInteger('s5');
			$table->tinyInteger('s6');
			$table->tinyInteger('s7');
			$table->tinyInteger('s8');

			$table->timestamps();
		});
	}
}
