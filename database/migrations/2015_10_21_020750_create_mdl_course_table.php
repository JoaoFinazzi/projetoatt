<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdlCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mdl_course', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('category')->default(0)->index('mdl_cour_cat_ix');
			$table->bigInteger('sortorder')->default(0)->index('mdl_cour_sor_ix');
			$table->string('fullname', 254)->default('');
			$table->string('shortname')->default('')->index('mdl_cour_sho_ix');
			$table->string('idnumber', 100)->default('')->index('mdl_cour_idn_ix');
			$table->text('summary', 65535)->nullable();
			$table->boolean('summaryformat')->default(0);
			$table->string('format', 21)->default('topics');
			$table->boolean('showgrades')->default(1);
			$table->integer('newsitems')->default(1);
			$table->bigInteger('startdate')->default(0);
			$table->bigInteger('marker')->default(0);
			$table->bigInteger('maxbytes')->default(0);
			$table->smallInteger('legacyfiles')->default(0);
			$table->smallInteger('showreports')->default(0);
			$table->boolean('visible')->default(1);
			$table->boolean('visibleold')->default(1);
			$table->smallInteger('groupmode')->default(0);
			$table->smallInteger('groupmodeforce')->default(0);
			$table->bigInteger('defaultgroupingid')->default(0);
			$table->string('lang', 30)->default('');
			$table->string('calendartype', 30)->default('');
			$table->string('theme', 50)->default('');
			$table->bigInteger('timecreated')->default(0);
			$table->bigInteger('timemodified')->default(0);
			$table->boolean('requested')->default(0);
			$table->boolean('enablecompletion')->default(0);
			$table->boolean('completionnotify')->default(0);
			$table->bigInteger('cacherev')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mdl_course');
	}

}
