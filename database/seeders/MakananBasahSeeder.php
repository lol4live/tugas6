<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakananBasahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('menu_makananbasah')->insert([
        'id makananbasah'=>'12045326',
        'nama makanan'=>'mie pangsit',
        'harga makanan'=>'15000',
        'deskripsi makanan'=>'mie pangsit full daging dengan kuar yang menyegarkan',
        'jumlah'=>'4'
       ]);
    }
}
