<?php

namespace Database\Seeders;
use DB;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class NagariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
        for($x = 1; $x <= 20; $x++){
        DB::table('nagari')->insert([
        	'id' => $faker->numberBetween(2,21),
        	'nama' => $faker->word
        ]);

        }
    }
}
