<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->string('tingkat', 100)->nullable();
            $table->string('nama_sekolah', 100)->nullable();
            $table->string('tempat', 100)->nullable();
            $table->string('nama_kepala', 100)->nullable();
            $table->string('no_sttb', 100)->nullable();
            $table->string('tgl_sttb', 100)->nullable();
            $table->string('th_lulus', 100)->nullable();
            $table->string('biaya', 100)->nullable();
            $table->string('ijazah')->nullable();
            $table->string('transkrip')->nullable();
            $table->tinyInteger('status')->default('0')->comment('0=visible,1=hidden');
            $table->integer('created_by');
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
        Schema::dropIfExists('pendidikans');
    }
}
