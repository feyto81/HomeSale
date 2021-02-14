<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerumahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perumahan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('thumbnail');
            $table->string('gambar1');
            $table->string('gambar2');
            $table->string('gambar3');
            $table->string('price');
            $table->string('luas');
            $table->string('address');
            $table->string('room');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('description');
            $table->string('details');
            $table->string('features');
            $table->string('video_link');
            $table->string('location');
            $table->string('status');
            $table->unsignedBigInteger('agen_id');
            $table->foreign('agen_id')->references('id')->on('agen');
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
        Schema::dropIfExists('perumahan');
    }
}
