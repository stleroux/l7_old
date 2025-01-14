<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('ingredients');
			$table->text('methodology');
			$table->string('image')->nullable();
			$table->integer('category_id')->unsigned()->index('category_id');
			$table->integer('servings')->unsigned()->nullable();
			$table->integer('prep_time_hours')->unsigned()->nullable();
			$table->integer('prep_time_minutes')->unsigned()->nullable();
			$table->integer('cook_time_hours')->unsigned()->nullable();
			$table->integer('cook_time_minutes')->unsigned()->nullable();
			$table->boolean('personal')->default(0);
			$table->integer('views')->unsigned()->nullable()->default(0);
			$table->string('source')->nullable();
			$table->text('private_notes')->nullable();
			$table->text('public_notes')->nullable();
			$table->bigInteger('user_id')->unsigned()->index('user_id');
			$table->integer('modified_by_id')->unsigned()->nullable()->index('modified_by');
			$table->integer('last_viewed_by_id')->unsigned()->nullable()->index('last_viewed_by_id');
			$table->dateTime('last_viewed_on')->nullable();
			$table->dateTime('published_at')->nullable();
			$table->softDeletes();
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipes');
	}

}
