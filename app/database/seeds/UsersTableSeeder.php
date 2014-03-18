<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'email' => 'ransomcarroll@gmail.com',
            'name' => 'Ransom Carroll',
            'password' => Hash::make('test')
        ]);
    }

}