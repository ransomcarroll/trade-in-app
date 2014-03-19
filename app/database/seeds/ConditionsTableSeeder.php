<?php

class ConditionsTableSeeder extends Seeder {

    public function run()
    {
        $conditions = ['poor','fair','like new'];

        foreach($conditions as $condition)
        {
            Condition::create([
                "name" => $condition
            ]);
        }
    }

}