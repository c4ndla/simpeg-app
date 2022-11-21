<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePangkatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pangkat', function (Blueprint $table) {
            $table->id();
            $table->string('golongan', 100)->nullable();
            $table->string('angka_kredit', 100)->nullable();
            $table->string('tmt_pangkat', 100)->nullable();
            $table->string('sk_jabatan', 100)->nullable();
            $table->string('no_sk', 100)->nullable();
            $table->string('tgl_sk', 100)->nullable();
            $table->string('status_pangkat', 100)->nullable();
            $table->string('dokumen', 100)->nullable();
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
        Schema::dropIfExists('pangkats');
    }
}
