<?php

namespace Database\Seeders;
use DB;


use Illuminate\Database\Seeder;

class LevelPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_pendidikan')->insert([
        	'id' => 1,
        	'nama' => 'SMA'
        ]);
    }
}
