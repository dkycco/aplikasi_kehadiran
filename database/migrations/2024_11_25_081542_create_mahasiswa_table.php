<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('singkat');
            $table->timestamps();
        });

        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('singkat');
            $table->timestamps();
        });

        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('fakultas_id')->constrained('fakultas');
            $table->foreignId('prodi_id')->constrained('prodi');
            $table->string('tingkat');
            $table->timestamps();
        });

        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nim')->unique();
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->foreignId('fakultas_id')->constrained('fakultas');
            $table->foreignId('prodi_id')->constrained('prodi');
            $table->foreignId('kelas_id')->constrained('kelas');
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
        Schema::dropIfExists('fakultas');
        Schema::dropIfExists('prodi');
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('mahasiswa');
    }
}
