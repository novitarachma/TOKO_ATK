<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggans')->insert([
            'nama' => 'Rachma Novita Anggreani',
            'alamat' => 'sidoarjo',
            'no_telepon' => '085706469814',
        ]);
    }
}
