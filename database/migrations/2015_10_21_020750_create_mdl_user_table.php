<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMdlUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mdl_user', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('auth', 20)->default('manual')->index('mdl_user_aut_ix');
			$table->boolean('confirmed')->default(0)->index('mdl_user_con_ix');
			$table->boolean('policyagreed')->default(0);
			$table->boolean('deleted')->default(0)->index('mdl_user_del_ix');
			$table->boolean('suspended')->default(0);
			$table->bigInteger('mnethostid')->default(0);
			$table->string('username', 100)->default('')->index('username');
			$table->string('password')->default('');
			$table->string('idnumber')->default('')->index('mdl_user_idn_ix');
			$table->string('firstname', 100)->default('')->index('mdl_user_fir_ix');
			$table->string('lastname', 100)->default('')->index('mdl_user_las_ix');
			$table->string('email', 100)->default('')->index('mdl_user_ema_ix');
			$table->boolean('emailstop')->default(0);
			$table->string('icq', 15)->default('');
			$table->string('skype', 50)->default('');
			$table->string('yahoo', 50)->default('');
			$table->string('aim', 50)->default('');
			$table->string('msn', 50)->default('');
			$table->string('phone1', 20)->default('');
			$table->string('phone2', 20)->default('');
			$table->string('institution')->default('');
			$table->string('department')->default('');
			$table->string('address')->default('');
			$table->string('city', 120)->default('')->index('mdl_user_cit_ix');
			$table->string('country', 2)->default('')->index('mdl_user_cou_ix');
			$table->string('lang', 30)->default('en');
			$table->string('calendartype', 30)->default('gregorian');
			$table->string('theme', 50)->default('');
			$table->string('timezone', 100)->default('99');
			$table->bigInteger('firstaccess')->default(0);
			$table->bigInteger('lastaccess')->default(0)->index('mdl_user_las2_ix');
			$table->bigInteger('lastlogin')->default(0);
			$table->bigInteger('currentlogin')->default(0);
			$table->string('lastip', 45)->default('');
			$table->string('secret', 15)->default('');
			$table->bigInteger('picture')->default(0);
			$table->string('url')->default('');
			$table->text('description', 65535)->nullable();
			$table->boolean('descriptionformat')->default(1);
			$table->boolean('mailformat')->default(1);
			$table->boolean('maildigest')->default(0);
			$table->boolean('maildisplay')->default(2);
			$table->boolean('autosubscribe')->default(1);
			$table->boolean('trackforums')->default(0);
			$table->bigInteger('timecreated')->default(0);
			$table->bigInteger('timemodified')->default(0);
			$table->bigInteger('trustbitmask')->default(0);
			$table->string('imagealt')->nullable();
			$table->string('lastnamephonetic')->nullable()->index('mdl_user_las3_ix');
			$table->string('firstnamephonetic')->nullable()->index('mdl_user_fir2_ix');
			$table->string('middlename')->nullable()->index('mdl_user_mid_ix');
			$table->string('alternatename')->nullable()->index('mdl_user_alt_ix');
			$table->unique(['mnethostid','username'], 'mdl_user_mneuse_uix');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mdl_user');
	}

}
