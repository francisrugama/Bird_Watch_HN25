<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('availability_schedule');
            $table->string('description');


            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')
            ->on('tours')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references ('id')
            ->on('hotels')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
