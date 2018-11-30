<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaRajeshsiburian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id'); //membuat kolom id auto increment
            $table->string('name'); //membuat kolom nama
            $table->string('username'); //membuat kolom email
            $table->string('password'); //membuat kolom no hp
            $table->string('companyEmail'); //membuat kolom alamat dengan tipe text
            $table->timestamps(); //membuat kolom created_at dan updated_at sebagai fungsi dasar laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
