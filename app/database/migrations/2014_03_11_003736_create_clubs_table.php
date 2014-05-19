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
        Schema::create('club_types', function(Blueprint $table) {
            $table->increments('id');
			$table->text('name');
			$table->timestamps();
        });

        Schema::create('club_conditions', function(Blueprint $table) {
            $table->increments('id');
			$table->text('name');
			$table->timestamps();
        });

        Schema::create('club_brands', function(Blueprint $table) {
            $table->increments('id');
			$table->text('name');
			$table->timestamps();
        });

        Schema::create('clubs', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('club_type')->unsigned();
			$table->foreign('club_type')->references('id')->on('club_types');
			$table->integer('club_condition')->unsigned();
			$table->foreign('club_condition')->references('id')->on('club_conditions');
			$table->integer('club_brand')->unsigned();
			$table->foreign('club_brand')->references('id')->on('club_brands');
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
	    Schema::drop('club_types');
	    Schema::drop('club_conditions');
	    Schema::drop('club_brands');
	}

}
