<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buahs')->insert(array(
            array(
                'nama'  => 'Mangga',
                'harga' => '5000',
            ),
            array(
                'nama'  => 'Apel',
                'harga' => '10000',
            ),
            array(
                'nama'  => 'Salak',
                'harga' => '8000',
            ),
            ));
    }
}
