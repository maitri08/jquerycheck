<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFramePageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_frame', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('frame_type')->nullable()->unsigned();
            $table->foreign('frame_type')->references('id')->on('product_page');
            $table->string('total_frame')->nullable();
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
        Schema::dropIfExists('photo_frame');
    }
}
