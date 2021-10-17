<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach (range(1,10) as $key => $value) {
             DB::table('students')->insert([
                'name' => $faker->name(),
             ]);
        }
    }
}
