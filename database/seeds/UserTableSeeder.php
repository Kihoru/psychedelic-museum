<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'admin',
                'password' => Hash::make('123a123a'),
                'email' => 'jais@pingpong.fr'
            ]

        ]);
    }
}
