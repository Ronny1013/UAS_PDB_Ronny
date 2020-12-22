<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penduduk')->insert([
        'id' => 1,
        'keluarga_id' => 1,
        'nama' => 'Ronny',
        'nik' => '1711521013',
        'tempat_lahir' => 'Painan',
        'tanggal_lahir' => '1998-11-16',
        'agama' => 'Islam',
        'jenis_kelamin' => 'Laki-laki',
        'level_pendidikan_id' => 1,
        'pekerjaan_id' => 1,
        'status_pernikahan' => 'Belum menikah',
        'status_keluarga' => 'Kandung',
        'kewarganegaraan_id' => 1,
        'ayah' => 'Irzan',
        'ibu' => 'Suarti'
        ]);
    }
}
