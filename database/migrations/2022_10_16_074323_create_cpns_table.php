<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpns', function (Blueprint $table) {
            $table->id();
            $table->string('no_sk', 100)->nullable();
            $table->string('tgl_sk', 100)->nullable();
            $table->string('unit_kerja', 100)->nullable();
            $table->string('tamat_cpns', 100)->nullable();
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
        Schema::dropIfExists('cpns');
    }
}
