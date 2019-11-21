<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 200)->nullable();
			$table->string('position', 500)->nullable();
			$table->integer('order_on_page')->default(0);
			$table->string('image', 500)->nullable();
			$table->timestamps();
			$table->text('detail_description', 65535)->nullable();
			$table->string('category_slug', 500)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bods');
	}

}
