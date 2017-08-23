<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_theme', function (Blueprint $table) {
            $table->increments('id');
            $table->string('theme_name')->nullable();
            $table->string('sub_category')->nullable();
           // $table->foreign('sub_category')->references('id')->on('product_category');
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
        Schema::dropIfExists('product_theme');
    }
}
