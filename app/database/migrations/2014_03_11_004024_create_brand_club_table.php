<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandClubTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('brand_club', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('brand_id')->unsigned()->index();
			$table->integer('club_id')->unsigned()->index();
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
	    Schema::drop('brand_club');
	}

}
