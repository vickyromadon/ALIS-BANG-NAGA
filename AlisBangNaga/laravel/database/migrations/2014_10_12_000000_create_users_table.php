<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('nim');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('namaPerguruanTinggi');
            $table->string('password');
            $table->string('jenisKelamin')->nullable();
            $table->string('tempatTanggalLahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('gambar')->default('default.jpg');
            $table->rememberToken();
            $table->timestamps();
            $table->string('jabatan')->default('USER');
            $table->string('provinsi')->default('-');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
