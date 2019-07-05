<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("judul");
            $table->string("isi_konten");
            $table->string("foto")->nullable();
            $table->integer('id_kategori')->unsigned();
            $table->string("slug")->nullable();
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('categories')->onDelete('CASCADE');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
}
