<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hanghoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hanghoa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma');
            $table->string('ten');
            $table->integer('soluong');
            $table->integer('ton');
            $table->integer('nhap');
            $table->integer('xuat');
            $table->integer('huy');
            $table->integer('tondc');
            $table->integer('delai');
            $table->date('ngay');
            $table->integer('dongia');
            $table->integer('thanhtien');
            $table->string('dvtinh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hanghoa');
    }
}
