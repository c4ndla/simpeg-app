<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();
            $table->string('no_sk', 100)->nullable();
            $table->string('tgl_sk', 100)->nullable();
            $table->string('tmt_gaji', 100)->nullable();
            $table->string('pejabat', 100)->nullable();
            $table->string('masa_thn', 100)->nullable();
            $table->string('masa_bln', 100)->nullable();
            $table->string('gaji_pokok', 100)->nullable();
            $table->string('gaji_berkala', 100)->nullable();
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
        Schema::dropIfExists('gajis');
    }
}
