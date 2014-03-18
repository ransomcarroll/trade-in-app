<?php

use Faker\Factory as Faker;

class ClubsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $orientations = ["right","left"];

        foreach(range(1, 10) as $index)
        {
            Club::create([
            	"type"=>rand(1,5),
            	"condition"=>rand(1,5),
            	"brand"=>rand(1,10),
            	"model"=>$faker->word,
            	"shaft"=>$faker->word,
            	"value"=>rand(20,300),
            	"length"=>rand(30,40),
            	"orientation"=>$orientations[rand(0,1)]
            ]);
        }
    }

}