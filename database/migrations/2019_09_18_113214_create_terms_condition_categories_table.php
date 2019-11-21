<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTermsConditionCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('terms_condition_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('category_name', 500)->nullable();
			$table->timestamps();
			$table->text('detail')->nullable();
			$table->string('category_slug', 100)->nullable()->unique();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('terms_condition_categories');
	}

}
