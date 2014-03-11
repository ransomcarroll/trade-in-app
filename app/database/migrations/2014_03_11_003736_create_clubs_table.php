<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClubsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('clubs', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('type');
			$table->integer('condition');
			$table->integer('brand');
			$table->string('model');
			$table->string('shaft')->nullable();
			$table->float('value');
			$table->integer('length')->nullable();
			$table->string('orientation')->default('right');
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
	    Schema::drop('clubs');
	}

}
