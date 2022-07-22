<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mk__k_w_c_s', function (Blueprint $table) {
            $table->nim();
            $table->int('data_mining');
            $table->int('tekweb');
            $table->int('prak_praktekweb');
            $table->int('sda');
            $table->int('prak_sda');
            $table->int('dasar_algoritma');
            $table->int('jumlah');
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
        Schema::dropIfExists('mk__k_w_c_s');
    }
};
