<?php

class TypesTableSeeder extends Seeder {

    public function run()
    {
        $types = ['wood','iron','wedge','hybrid','putter','chipper'];

        foreach($types as $type)
        {
            Type::create([
                "name" => $type
            ]);
        }
    }

}