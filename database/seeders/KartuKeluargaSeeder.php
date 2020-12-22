<?php

namespace Database\Seeders;
use DB;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class KartuKeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
     
        for($x = 1; $x <= 30; $x++){
        DB::table('kartu_keluarga')->insert([
        	'id' => $faker->numberBetween(2,31),
            'no' => $faker->numberBetween(1024,1060),
            'jorong_id' => $faker->numberBetween(16,19),
            'tanggal_pencatatan' => $faker->date()
        ]);
    }
    }
}
