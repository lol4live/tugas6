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
        Schema::create('minuman', function (Blueprint $table) {
            $table->integer('id makanan',11);
            $table->string('nama makanan',250);
            $table->integer('harga makanan',15);
            $table->text('deskripsi makanan');
            $table->integer('jumlah',15); $table->integer('id makanan',11);
            $table->string('nama makanan',250);
            $table->integer('harga makanan',15);
            $table->text('deskripsi makanan');
            $table->integer('jumlah',15);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minuman');
    }
};
