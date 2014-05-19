<?php

use Faker\Factory as Faker;

class ClubsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $orientations = ["right","left"];

        $typeNames = ['wood','iron','wedge','hybrid','putter','chipper'];

        foreach($typeNames as $typeName)
        {
            $type = new Type;
            $type->name = $typeName;
            $type->save();
        }

        $conditionNames = ['poor','fair','like new'];

        foreach($conditionNames as $conditionName)
        {
            $condition = new Condition;
            $condition->name = $conditionName;
            $condition->save();
        }

        $brandNames = ['nike','titleist','taylor made', 'callaway','ping'];
        foreach($brandNames as $b)
        {
            $brand = new Brand;
            $brand->name = $b;
            $brand->save();
        }

        foreach(range(1, 10) as $index)
        {
            $club = new Club;
            $clubType = rand(1,6);
            $clubCondition = rand(1,3);
            $clubBrand = rand(1,5);
            $club->create([
            	"club_type"=>$clubType,
            	"club_condition"=>$clubCondition,
            	"club_brand"=>$clubBrand,
            	"model"=>$faker->word,
            	"shaft"=>$faker->word,
            	"value"=>rand(20,300),
            	"length"=>rand(30,40),
            	"orientation"=>$orientations[rand(0,1)]
            ]);
        }
    }

}