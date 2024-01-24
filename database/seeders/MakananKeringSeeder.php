<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MakananKeringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_makanankering')->insert([
            'id makanankering'=>'12045313',
            'nama makanan'=>'kwetiaw',
            'harga makanan'=>'15000',
            'deskripsi makanan'=>'kwetiaw goreng yang gurih dan nikmat',
            'jumlah'=>'1'
        ]);
    }
}
