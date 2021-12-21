<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            'diskon' => 1000,
            'ongkir' => 4000,
            'jumlah' => 2,
            'total' => 45000,
            'status' => 'lunas',
        ]);
    }
}
