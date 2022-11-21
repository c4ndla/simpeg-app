<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga', function (Blueprint $table) {
            $table->id();
            // $table->personal_id();
            $table->string('hubungan', 100)->nullable();
            $table->string('no_bpjs', 100)->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('nik', 100)->nullable();
            $table->string('jenis_kelamin', 100)->nullable();
            $table->string('agama', 100)->nullable();
            $table->string('tempat', 100)->nullable();
            $table->string('tgl_lahir', 100)->nullable();
            $table->string('pendidikan', 100)->nullable();
            $table->string('pekerjaan', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('dokumen')->nullable();
            $table->string('kk')->nullable();
            $table->tinyInteger('status')->default('0')->comment('0=visible,1=hidden');
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
        Schema::dropIfExists('keluargas');
    }
}
