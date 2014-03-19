<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('TypesTableSeeder');
		$this->call('ConditionsTableSeeder');
		$this->call('BrandsTableSeeder');
		$this->call('ClubsTableSeeder');
	}

}