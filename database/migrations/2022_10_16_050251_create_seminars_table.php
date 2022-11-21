<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminar', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100)->nullable();
            $table->string('tempat', 100)->nullable();
            $table->string('kedudukan', 100)->nullable();
            $table->string('tgl_seminar', 100)->nullable();
            $table->string('penyelenggara', 100)->nullable();
            $table->string('dokumen', 200)->nullable();
            $table->string('sertifikat', 200)->nullable();
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
        Schema::dropIfExists('seminars');
    }
}
