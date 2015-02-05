<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('applications', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('company_id')->unsigned();
			$table->string('position');
			$table->datetime('date_applied');
			$table->integer('status_id')->unsigned();
			$table->string('source_url');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('applications');
	}

}
