<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealsCategoryDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deals_category_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('content')->nullable();
			$table->string('app_link')->nullable();
			$table->string('sms_code')->nullable();
			$table->timestamps();
			$table->integer('category_id')->nullable();
			$table->integer('deal_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('deals_category_details');
	}

}
