<?php

class BrandsTableSeeder extends Seeder {

    public function run()
    {
        $brands = ['nike','titleist','taylor made', 'callaway','ping',];

        foreach($brands as $brand)
        {
            Brand::create([
                "name" => $brand
            ]);
        }
    }

}