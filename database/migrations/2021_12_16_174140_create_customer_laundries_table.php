<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerLaundriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_laundries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->nullable()->unsigned();
            $table->bigInteger('checkpoint_id')->nullable()->unsigned();
            $table->string('laundry_id');
            $table->string('luggage_category');
            $table->string('number_of_pieces');
            $table->longText('additional_description');
            $table->string('picture');
            $table->string('amount');
            $table->string('transaction_code');
            $table->string('payment_status')->nullable();
            $table->string('laundry_status')->nullable();
            $table->string('collection_status')->nullable();
            $table->string('delivery_status')->nullable();
            $table->timestamp('pickup_date');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('checkpoint_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('customer_laundries');
    }
}
