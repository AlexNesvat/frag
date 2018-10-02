<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $faker = Faker::create();
        DB::table('users')->insert([
            'name' => $faker->firstName,
            'email' => $faker->email,
            'password' => bcrypt('secret'),
            'role' => 'administrator',
            'address' => $faker->streetAddress
        ]);

        foreach (range(2,20) as $user){
            DB::table('users')->insert([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'role' => 'customer',
                'address' => $faker->streetAddress
            ]);
        }
    }
}
