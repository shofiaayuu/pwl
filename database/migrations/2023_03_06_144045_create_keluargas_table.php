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
        Schema::create('keluarga', function (Blueprint $table) {
            $table->string('no',20)->primary();
            $table->string('nama',50)->nullable();
            $table->string('status',50)->nullable();
            $table->string('tempat_lahir',40)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->char('jenis_kelamin')->default('L');
            $table->string('pekerjaan',50)->nullable();
            $table->string('agama',30)->nullable();
            $table->string('alamat',100)->nullable();
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
        Schema::dropIfExists('keluarga');
    }
};
