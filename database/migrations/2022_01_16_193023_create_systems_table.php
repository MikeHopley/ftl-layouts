<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemsTable extends Migration
{
	public function up()
	{
		Schema::create('systems', function (Blueprint $table) {
			$table->id();

			$table->foreignId('ship_id')->constrained();

			$table->string('name');
			$table->string('short_name');
			$table->boolean('optional')->default(false);

			$table->tinyInteger('s1_min');
			$table->tinyInteger('s1_max');
			$table->tinyInteger('s2_min');
			$table->tinyInteger('s2_max');
			$table->tinyInteger('s3_min');
			$table->tinyInteger('s3_max');
			$table->tinyInteger('s4_min');
			$table->tinyInteger('s4_max');
			$table->tinyInteger('s5_min');
			$table->tinyInteger('s5_max');
			$table->tinyInteger('s6_min');
			$table->tinyInteger('s6_max');
			$table->tinyInteger('s7_min');
			$table->tinyInteger('s7_max');
			$table->tinyInteger('s8_min');
			$table->tinyInteger('s8_max');

			$table->timestamps();
		});
	}
}
