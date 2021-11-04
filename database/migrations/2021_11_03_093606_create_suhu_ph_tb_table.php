<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuhuPhTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suhu_ph_tb', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kolam_foreign');
            $table->foreign('id_kolam_foreign')->references('id')->on('kolam_tb');
            $table->time('waktu');
            $table->float('suhu');
            $table->float('ph');
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
        Schema::dropIfExists('suhu_ph_tb');
    }
}
