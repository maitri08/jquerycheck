<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_address_book', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->nullable()->unsigned();
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->string('housenumber')->nullable();
            $table->text('street')->nullable();
            $table->text('division')->nullable();

            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
     
            $table->string('postcode')->nullable();
            $table->string('contact')->nullable();
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
        Schema::dropIfExists('customer_address_book');
    }
}
