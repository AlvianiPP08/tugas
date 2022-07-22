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
        Schema::create('mk_jarkoms', function (Blueprint $table) {
            $table->nim();
            $table->int('sistem_tekinf');
            $table->int('jarkom');
            $table->int('prak_jarkom');
            $table->int('sistem_digital');
            $table->int('arsitektur_organisasikom');
            $table->int('keamanan_informasi');
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
        Schema::dropIfExists('mk_jarkoms');
    }
};
