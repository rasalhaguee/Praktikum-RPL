<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_makanan');
            $table->string('nama_menu');
            $table->integer('kalori');
            $table->date('tanggal_makan');
            $table->string('waktu_makan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('food');
    }
}
