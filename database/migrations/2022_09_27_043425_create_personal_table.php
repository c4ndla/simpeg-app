<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            // $table->agama_id();
            $table->string('NIP', 100)->nullable();
            $table->string('nama_depan', 100)->nullable();
            $table->string('nama_belakang', 100)->nullable();
            $table->string('gelar_depan', 100)->nullable();
            $table->string('gelar_belakang', 100)->nullable();
            $table->string('jenis_kelamin', 100)->nullable();
            $table->string('agama', 100)->nullable();
            $table->string('tempat', 100)->nullable();
            $table->string('tgl_lahir', 100)->nullable();
            $table->string('status_nikah', 100)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('rt', 100)->nullable();
            $table->string('rw', 100)->nullable();
            $table->string('kode_pos', 100)->nullable();
            $table->string('no_telp', 100)->nullable();
            $table->string('no_hp', 100)->nullable();
            $table->string('status_pegawai', 100)->nullable();
            $table->string('status_jabatan', 100)->nullable();
            $table->string('status_keahlian', 100)->nullable();
            $table->string('tingkat_keahlian', 100)->nullable();
            $table->string('jabatan_struktural', 100)->nullable();
            $table->string('foto')->nullable();
            $table->string('ktp')->nullable();
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
        Schema::dropIfExists('personal');
    }
}
