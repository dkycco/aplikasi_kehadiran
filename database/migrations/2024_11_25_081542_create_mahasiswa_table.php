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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama mahasiswa
            $table->string('email')->unique(); // Email mahasiswa
            $table->timestamp('email_verified_at')->nullable(); // Verifikasi email
            $table->string('password'); // Password mahasiswa
            $table->string('nim')->unique(); // NIM mahasiswa (opsional)
            $table->rememberToken(); // Token untuk fitur remember me
            $table->timestamps(); // Timestamps created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
