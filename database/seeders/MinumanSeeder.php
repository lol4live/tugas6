<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_minuman')->insert([
            'id minuman'=>'12045413',
            'nama minuman'=>'es kelapa',
            'harga minuman'=>'15000',
            'deskripsi minuman'=>'es kelapa yang nikmat dan manis',
            'jumlah'=>'2'
        ]);
    }
}
