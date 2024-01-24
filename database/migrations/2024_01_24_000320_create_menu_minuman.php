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
        Schema::create('menu_minuman', function (Blueprint $table) {
            $table->integer('id minuman');
            $table->string('nama minuman',250);
            $table->integer('harga minuman');
            $table->text('deskripsi minuman');
            $table->integer('jumlah');
            $table->unique(array('id minuman'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_minuman');
    }
};
