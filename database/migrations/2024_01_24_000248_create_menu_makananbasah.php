<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu_makananbasah', function (Blueprint $table) {
            $table->integer('id makananbasah');
            $table->string('nama makanan',250);
            $table->integer('harga makanan');
            $table->text('deskripsi makanan');
            $table->integer('jumlah');
            $table->unique(array('id makananbasah'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_makananbasah');
    }
};
