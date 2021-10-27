<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CtHoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_hoadon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma');
            $table->integer('id_hoadonban');
            $table->integer('id_monan');
            $table->integer('soluong');
            $table->integer('tongtien');
            $table->string('dvtinh');
            $table->integer('dongia');
            $table->date('ngay');
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
        Schema::dropIfExists('ct_hoadon');
    }
}
