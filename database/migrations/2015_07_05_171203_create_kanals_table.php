<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKanalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kanals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
	        $table->string('category');
	        $table->string('description');
	        $table->string('instagramAccount');
	        $table->string('instagramId');
	        $table->string('color');
	        $table->string('image');
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
		Schema::drop('kanals');
	}

}
