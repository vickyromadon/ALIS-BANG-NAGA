<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petisis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('judul');
            $table->text('body');
            $table->string('gambar');
            $table->boolean('accepted')->default('0');
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
        Schema::drop('petisis');
    }
}
