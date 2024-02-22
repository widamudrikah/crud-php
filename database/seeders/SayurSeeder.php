<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SayurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sayurs')->insert(array(
            array(
                'nama'  => 'terong',
                'harga' => '5000',
            ),
            array(
                'nama'  => 'buncis',
                'harga' => '10000',
            ),
            array(
                'nama'  => 'sawi',
                'harga' => '8000',
            ),
            ));
    }
}
