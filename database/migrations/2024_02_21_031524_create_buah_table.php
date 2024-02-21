<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuahTable extends Migration
{
    public function up()
    {
        Schema::create('buah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->decimal('harga', 8, 2);
            $table->string('warna');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buah');
    }
}
