<?php

namespace Database\Seeders;

use App\Models\students;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // students::factory(10)->create();
        $faker = \Faker\Factory::create();

        foreach(range(1,10) as $input){
            DB::table('students')->insert([
                'name' => $faker->name()
            ]);
        }
    }
}
