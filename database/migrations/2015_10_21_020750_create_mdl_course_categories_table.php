<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdlCourseCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mdl_course_categories', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('name')->default('');
			$table->string('idnumber', 100)->nullable();
			$table->text('description', 65535)->nullable();
			$table->boolean('descriptionformat')->default(0);
			$table->bigInteger('parent')->default(0)->index('mdl_courcate_par_ix');
			$table->bigInteger('sortorder')->default(0);
			$table->bigInteger('coursecount')->default(0);
			$table->boolean('visible')->default(1);
			$table->boolean('visibleold')->default(1);
			$table->bigInteger('timemodified')->default(0);
			$table->bigInteger('depth')->default(0);
			$table->string('path')->default('');
			$table->string('theme', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mdl_course_categories');
	}

}
