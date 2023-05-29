<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

	public function up(): void
	{
		Schema::table('rooms', function (Blueprint $table) {
			$table->integer('overflow_x')->after('overflow_room')->default(0);
			$table->integer('overflow_y')->after('overflow_x')->default(0);
		});
	}
};
