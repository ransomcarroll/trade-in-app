<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClubConditionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('club_condition', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('club_id')->unsigned()->index();
			$table->integer('condition_id')->unsigned()->index();
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
	    Schema::drop('club_condition');
	}

}
